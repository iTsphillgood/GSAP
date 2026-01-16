import inventory from './inventory.js';

class CommerceAgent {
    constructor() {
        this.context = {
            stage: 'greeting', // greeting, needs_analysis, recommendation, closing
            preferences: {}
        };
    }

    async processMessage(userMessage) {
        const msg = userMessage.toLowerCase();
        let response = {
            text: "",
            vehicles: [],
            action: null
        };

        // Simulated "AI" Logic
        if (this.context.stage === 'greeting') {
            response.text = "Hej! Jag är Kihlströms AI-assistent. Jag kan hjälpa dig att hitta rätt transportbil baserat på dina behov. Vad letar du efter idag? (t.ex. 'pickup för skogsbruk', 'skåpbil för bud', 'låg skatt')";
            this.context.stage = 'needs_analysis';
        }
        else if (msg.includes('pickup') || msg.includes('isuzu') || msg.includes('d-max') || msg.includes('skog')) {
            response.text = "För tuffa tag och skogsbruk rekommenderar jag Isuzu D-Max. Särskilt XRX-modellen med 3,5 tons dragvikt. Är låg fordonsskatt (CNG) viktigt för dig?";
            response.vehicles = inventory.filter(v => v.type === 'Pickup');
            this.context.preferences.type = 'Pickup';
            this.context.stage = 'recommendation';
        }
        else if (msg.includes('skåp') || msg.includes('iveco') || msg.includes('daily') || msg.includes('bud') || msg.includes('last')) {
            response.text = "För distribution och volym är Iveco Daily oslagbar. Vi har både rena skåpbilar (12m³) och våra 'Fastlane'-modeller med skåp och bakgavellyft redo för leverans.";
            response.vehicles = inventory.filter(v => v.type === 'Van' || v.type === 'Chassi');
            this.context.preferences.type = 'Van';
            this.context.stage = 'recommendation';
        }
        else if (msg.includes('skatt') || msg.includes('cng') || msg.includes('biogas')) {
            response.text = "Smart val! Med våra CNG-modeller (Biogas) sänker du årsskatten drastiskt (ca 1306 kr/år) och kör miljövänligt.";
            response.vehicles = inventory.filter(v => v.fuel.includes('CNG'));
        }
        else if (msg.includes('lift') || msg.includes('bakgavel')) {
            response.text = "Då ska du titta på vår Daily Fastlane. Den kommer färdigbyggd med volymskåp och Zepro-lift. Ingen väntetid!";
            response.vehicles = inventory.filter(v => v.model.includes('Fastlane'));
        }
        else {
            response.text = "Jag förstår. Kan du berätta lite mer om hur du tänker använda fordonet? T.ex. 'dra tungt släp' eller 'köra i stan'?";
        }

        return response;
    }
}

export default new CommerceAgent();

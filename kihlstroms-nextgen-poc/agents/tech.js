const TechAgent = {
    name: "Technical Specification Unit",
    color: "text-red-400",

    process(msg, inventory) {
        const lowerMsg = msg.toLowerCase();
        let response = { text: "", vehicles: [] };

        if (lowerMsg.includes('drag') || lowerMsg.includes('tow') || lowerMsg.includes('vikt') || lowerMsg.includes('payload')) {
            response.text = "Technical Specification Lookup:\n\n**Isuzu D-Max** features a class-leading **3,500 kg towing capacity** and a gross train weight of 6,000 kg. \n\n**Iveco Daily** offers up to **1,430 kg payload** on a standard B-license, depending on the wheelbase and roof height.";
            response.vehicles = inventory.filter(v => v.towing >= 3500);
        }
        else if (lowerMsg.includes('motor') || lowerMsg.includes('engine') || lowerMsg.includes('hk')) {
            response.text = "Engine Data:\n\n**Isuzu RZ4E-TC**: 1.9L Turbo Diesel, 163 hk / 360 Nm. No AdBlue requirement on some configs.\n**Iveco F1A**: 2.3L Turbo Diesel, 156 hk / 380 Nm. Hi-Matic 8-speed transmission.";
            response.vehicles = inventory;
        }
        else {
            return null; // Can't handle
        }
        return response;
    }
};

export default TechAgent;

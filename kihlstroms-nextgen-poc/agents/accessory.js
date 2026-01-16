import { accessories } from '../inventory.js';

const AccessoryAgent = {
    name: "Accessories & Customization",
    color: "text-purple-400",

    process(msg, inventory) {
        const lowerMsg = msg.toLowerCase();
        let response = { text: "", vehicles: [] };

        if (lowerMsg.includes('tillbehör') || lowerMsg.includes('kåpa') || lowerMsg.includes('drag') || lowerMsg.includes('extra') || lowerMsg.includes('accessories')) {

            // Generate a list of available accessories
            const accList = accessories.map(a => `- ${a.name}: ~${a.price} kr`).join('\n');

            response.text = `Customization Options Available:\n\n${accList}\n\nI can add these to any quote. For example, adding a **Towbar** and **Heater** increases the leasing cost by approx +450 kr/mo.`;

            // Filter inventory that is relevant for customization (Pickups/Chassis)
            response.vehicles = inventory.filter(v => v.type === 'Pickup' || v.type === 'Chassi');
        }
        else {
            return null; // Can't handle
        }
        return response;
    }
};

export default AccessoryAgent;

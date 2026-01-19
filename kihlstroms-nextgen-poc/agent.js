import inventory from './inventory.js';
import FinanceAgent from './agents/finance.js';
import TechAgent from './agents/tech.js';
import AccessoryAgent from './agents/accessory.js';

class Orchestrator {
    constructor() {
        this.activeAgent = null;
    }

    async processMessage(userMessage) {
        if (userMessage === "init") {
            return {
                text: "Enterprise Fleet System Online.\n\nActive Agents:\n- Finance & TCO Specialist (Tax, Leasing)\n- Technical Spec Unit (Towing, Payload)\n- Accessories & Customization (Upfitting)\n\nHow can we assist your fleet operations today?",
                agentName: "System Orchestrator",
                agentColor: "text-blue-400"
            };
        }

        // Try Finance Agent
        const financeResponse = FinanceAgent.process(userMessage, inventory);
        if (financeResponse) {
            return {
                ...financeResponse,
                agentName: FinanceAgent.name,
                agentColor: FinanceAgent.color
            };
        }

        // Try Tech Agent
        const techResponse = TechAgent.process(userMessage, inventory);
        if (techResponse) {
            return {
                ...techResponse,
                agentName: TechAgent.name,
                agentColor: TechAgent.color
            };
        }

        // Try Accessory Agent
        const accResponse = AccessoryAgent.process(userMessage, inventory);
        if (accResponse) {
            return {
                ...accResponse,
                agentName: AccessoryAgent.name,
                agentColor: AccessoryAgent.color
            };
        }

        // Default / Fallback
        return {
            text: "I can route your query to our specialized agents. Please ask about 'Tax Savings', 'Leasing Costs', 'Towbar Installation', or 'Engine Specs'.",
            agentName: "System Orchestrator",
            agentColor: "text-blue-400",
            vehicles: []
        };
    }
}

export default new Orchestrator();

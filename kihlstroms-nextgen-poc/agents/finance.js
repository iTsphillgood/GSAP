const FinanceAgent = {
    name: "Finance & TCO Specialist",
    color: "text-green-400",

    process(msg, inventory) {
        const lowerMsg = msg.toLowerCase();
        let response = { text: "", vehicles: [] };

        if (lowerMsg.includes('stockholm') || lowerMsg.includes('miljözon') || lowerMsg.includes('city')) {
             response.text = "⚠️ **Critical Alert for Stockholm Operations** ⚠️\n\nEffective Dec 31, 2024, Miljözon Klass 3 bans standard diesel vehicles in Stockholm City. \n\n**Solution:** You MUST choose **Isuzu D-Max CNG** or **Iveco Daily Biogas**. Both are fully exempt from the ban and qualify for lower taxes.";
             response.vehicles = inventory.filter(v => v.fuel.includes('CNG') || v.fuel.includes('Biogas'));
        }
        else if (lowerMsg.includes('skatt') || lowerMsg.includes('tax') || lowerMsg.includes('malus')) {
            response.text = "Analysis of Tax Implications:\n\nStandard Diesel vehicles currently face high Malus taxes (~24,000 SEK/yr). \n\nMy recommendation is the **Isuzu D-Max CNG**, which qualifies as an 'Eco-vehicle' with a tax of approx **1,306 SEK/yr**. This saves ~65,000 SEK over a 3-year leasing period.";
            response.vehicles = inventory.filter(v => v.fuel.includes('CNG'));
        }
        else if (lowerMsg.includes('leasing') || lowerMsg.includes('pris') || lowerMsg.includes('price')) {
            response.text = "Our Enterprise Leasing starts at approx 5,522 SEK/mo for the CNG model. This includes service but excludes insurance. The projected Residual Value (RV) for Isuzu remains class-leading at ~55% after 36 months.";
            response.vehicles = inventory;
        }
        else {
            return null; // Can't handle
        }
        return response;
    }
};

export default FinanceAgent;

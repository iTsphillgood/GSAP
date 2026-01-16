// Mock Inventory Database
const inventory = [
    {
        id: "DMAX-XRX-001",
        model: "Isuzu D-Max XRX Double Cab",
        type: "Pickup",
        fuel: "Diesel (HVO100)",
        transmission: "Automat",
        color: "Onyx Black",
        price: "449 900 kr",
        towing: 3500,
        payload: 1050,
        features: ["4WD", "Läderklädsel", "ADAS", "Dragkrok"],
        stock_status: "In Stock",
        image: "https://www.isuzusverige.se/media/dq1lpn1t/web_isuzu_3848_lastatungt.jpg"
    },
    {
        id: "DMAX-CNG-002",
        model: "Isuzu D-Max XRX CNG",
        type: "Pickup",
        fuel: "CNG/Biogas (Euro 6)",
        transmission: "Automat",
        color: "Valencia Orange",
        price: "489 900 kr",
        towing: 3500,
        payload: 980,
        features: ["Miljözon 3 Compliant", "Låg Skatt (1306kr)", "Eco-driving"],
        stock_status: "Order",
        image: "https://www.isuzusverige.se/media/pxzlkn3t/m24_dc_xrx_kapa_n3_kalkbrott_0870_containerbreak_mobile2.jpg"
    },
    {
        id: "DAILY-BIO-001",
        model: "Iveco Daily Van 16m3 Biogas",
        type: "Van",
        fuel: "Biogas (CNG)",
        transmission: "Hi-Matic 8-speed",
        color: "Polar White",
        price: "419 900 kr",
        towing: 3500,
        payload: 1350,
        features: ["Miljözon 3 Compliant", "16m3 Volym", "Låg TCO"],
        stock_status: "Fastlane (Ready)",
        image: "https://ucp.dev/assets/order.png"
    },
    {
        id: "DAILY-FAST-002",
        model: "Iveco Daily Fastlane Box/Lift",
        type: "Chassi",
        fuel: "Diesel",
        transmission: "Hi-Matic 8-speed",
        color: "Grey",
        price: "459 900 kr",
        towing: 3500,
        payload: 990,
        features: ["19m3 Skåp", "Zepro 750kg Lift", "Sidodörr"],
        stock_status: "Fastlane (Ready)",
        image: "https://ucp.dev/assets/identity.png"
    }
];

// Phase 1 Accessories Data
export const accessories = [
    { id: "acc-hardtop", name: "Flakkåpa (Hardtop)", price: 25000, category: "Exterior" },
    { id: "acc-towbar", name: "Dragkrok (Fast)", price: 6500, category: "Utility" },
    { id: "acc-heater", name: "Dieselvärmare (Webasto)", price: 22000, category: "Comfort" },
    { id: "acc-cng", name: "CNG Konvertering", price: 49900, category: "Performance" },
    { id: "acc-led", name: "LED-Ramp (20-tum)", price: 4500, category: "Lighting" }
];

export default inventory;

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
        fuel: "CNG/Biogas",
        transmission: "Automat",
        color: "Valencia Orange",
        price: "489 900 kr",
        towing: 3500,
        payload: 980,
        features: ["Låg Skatt (1306kr)", "Eco-driving", "City Safety"],
        stock_status: "Order",
        image: "https://www.isuzusverige.se/media/pxzlkn3t/m24_dc_xrx_kapa_n3_kalkbrott_0870_containerbreak_mobile2.jpg"
    },
    {
        id: "DAILY-12-001",
        model: "Iveco Daily Van 12m3",
        type: "Van",
        fuel: "Diesel",
        transmission: "Hi-Matic 8-speed",
        color: "Polar White",
        price: "399 900 kr",
        towing: 3500,
        payload: 1430,
        features: ["12m3 Volym", "Backkamera", "Webasto"],
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

export default inventory;

# Isuzu D-Max "Digital Garage" Roadmap 2025

This document outlines the strategy for transforming Kihlströms' digital presence from a simple brochure site to an interactive B2B e-commerce platform for commercial vehicles and accessories.

## Phase 1: Static "Build Your Own" (Immediate)
**Goal:** Capture high-intent leads by showing pricing transparency and package value.

### Feature Set:
*   **Accessory Catalog (Static):**
    *   List top 10 "Must-Have" accessories (Towbar, Hardtop, Heater).
    *   Display "Starting from" prices.
    *   **Action:** "Add to Quote" checkboxes in the Quote Modal.
*   **Pre-configured Bundles:**
    *   **"Stockholm City Edition" (CNG):** D-Max XRX CNG + Hardtop + Winter Wheels.
    *   **"Entreprenad Pro":** D-Max XRX + Bed Liner + Towbar + Warning Lights.
    *   **"Hunter":** D-Max XRX + Raised Suspension + Dog Cage + LED Bar.
*   **Tech Stack:**
    *   HTML/JS (Current `isuzu.html`).
    *   Simple form handling (Email/CRM integration).

## Phase 2: Interactive Configurator (NextGen POC)
**Goal:** Engage users with a "Game-like" experience using the AI Agent.

### Feature Set:
*   **Visual Configurator:**
    *   Toggle accessories on/off in a 2D image view (Layered images).
*   **AI Accessory Agent (`accessories_agent.js`):**
    *   User: "Jag behöver extraljus för mörkerkörning."
    *   Agent: "Jag rekommenderar en 20-tums LED-ramp infälld i grillen. Det kostar ca 4 500 kr. Ska jag lägga till det?"
*   **Real-time Price Estimator:**
    *   Update monthly leasing cost dynamically as accessories are added.
    *   Ex: "+150 kr/mo" for a Towbar.

## Phase 3: Dynamic TCO & Checkout (Enterprise)
**Goal:** Full B2B transactional capability.

### Feature Set:
*   **Dynamic TCO Engine:**
    *   Calculate exact tax savings based on chosen fuel type (Diesel vs CNG).
    *   Factor in residual value impact of selected accessories (e.g., Towbar adds value, stickers might reduce it).
*   **Fleet Management Portal:**
    *   Save configurations for multiple employees.
    *   Bulk ordering.
*   **Tech Stack:**
    *   Headless CMS (Sanity/Contentful) for accessory data.
    *   React/Next.js frontend.
    *   Integration with leasing provider APIs (DNB/Santander).

## Implementation Plan (Current Sprint)
1.  **Update `isuzu.html`:** Add "Accessory Highlights" grid.
2.  **Update `inventory.js`:** Add accessory pricing metadata.
3.  **Create `accessories_agent.js`:** Enable the AI to upsell accessories.

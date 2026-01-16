/**
 * Kihlströms "Commerce Agent" Logic
 * Simulates an LLM-driven sales assistant for the 2026 POC.
 */

window.agentStart = function() {
    document.getElementById('ai-agent').classList.remove('hidden');
    document.getElementById('ai-agent').classList.add('flex');
    document.getElementById('agent-toggle').classList.add('hidden');
}

window.agentClose = function() {
    document.getElementById('ai-agent').classList.add('hidden');
    document.getElementById('ai-agent').classList.remove('flex');
    document.getElementById('agent-toggle').classList.remove('hidden');
}

window.agentReply = function(choice) {
    // User message
    addMessage(choice, 'user');

    // Clear buttons
    document.getElementById('quick-replies').innerHTML = '';

    // AI Processing
    showTyping();

    setTimeout(() => {
        processChoice(choice);
    }, 1000);
}

function addMessage(text, sender) {
    const history = document.getElementById('chat-history');
    const div = document.createElement('div');

    if (sender === 'user') {
        div.className = 'bg-neon-blue/20 ml-auto rounded-xl p-3 rounded-tr-none text-right max-w-[80%]';
    } else {
        div.className = 'bg-white/10 mr-auto rounded-xl p-3 rounded-tl-none max-w-[80%]';
    }

    div.innerHTML = text;
    history.appendChild(div);
    history.scrollTop = history.scrollHeight;
}

function showTyping() {
    const history = document.getElementById('chat-history');
    const div = document.createElement('div');
    div.id = 'typing-indicator';
    div.className = 'bg-white/10 mr-auto rounded-xl p-3 rounded-tl-none w-16';
    div.innerHTML = '<div class="flex gap-1"><div class="w-2 h-2 bg-white/50 rounded-full animate-bounce"></div><div class="w-2 h-2 bg-white/50 rounded-full animate-bounce delay-75"></div><div class="w-2 h-2 bg-white/50 rounded-full animate-bounce delay-150"></div></div>';
    history.appendChild(div);
    history.scrollTop = history.scrollHeight;
}

function removeTyping() {
    const el = document.getElementById('typing-indicator');
    if (el) el.remove();
}

function processChoice(choice) {
    removeTyping();
    const replies = document.getElementById('quick-replies');

    if (choice === 'Pickup') {
        addMessage("Excellent choice. The Isuzu D-Max is perfect for off-road and heavy towing. What is your primary use?", 'ai');
        createButton('Construction / Heavy', 'entreprenad');
        createButton('Forestry / Hunting', 'skog');
    }
    else if (choice === 'Van') {
        addMessage("Understood. Iveco Daily offers class-leading volume. Do you need a standard van or a box truck with a lift?", 'ai');
        createButton('Standard Van (12m3)', 'city');
        createButton('Box Truck + Lift', 'fastlane');
    }
    else if (choice === 'entreprenad' || choice === 'skog') {
        addMessage("I've filtered the showroom for <strong>Isuzu D-Max XRX</strong>. It features 3.5t towing capacity and 4WD.", 'ai');
        filterShowroom('Isuzu');
        createButton('Book Test Drive', 'book');
        createButton('Start Over', 'restart');
    }
    else if (choice === 'city') {
        addMessage("Filtering for <strong>Iveco Daily Van</strong>. Perfect for city logistics with its tight turning radius.", 'ai');
        filterShowroom('Daily Van');
        createButton('Request Quote', 'quote');
        createButton('Start Over', 'restart');
    }
    else if (choice === 'fastlane') {
        addMessage("Showing <strong>Daily Fastlane</strong> models. These are ready for immediate delivery with pre-installed lifts.", 'ai');
        filterShowroom('Fastlane');
        createButton('Request Quote', 'quote');
        createButton('Start Over', 'restart');
    }
    else if (choice === 'restart') {
        addMessage("Let's start over. Pickup or Van?", 'ai');
        document.querySelectorAll('.glass-panel').forEach(el => el.classList.remove('hidden'));
        createButton('Pickup', 'Pickup');
        createButton('Van', 'Van');
    }
    else {
        addMessage("I've noted your interest. A sales representative will contact you shortly.", 'ai');
    }
}

function createButton(text, value) {
    const btn = document.createElement('button');
    btn.className = 'bg-white/5 hover:bg-neon-blue/20 border border-white/10 rounded-full px-4 py-2 text-xs transition whitespace-nowrap';
    btn.innerText = text;
    btn.onclick = () => agentReply(value);
    document.getElementById('quick-replies').appendChild(btn);
}

function filterShowroom(keyword) {
    const items = document.querySelectorAll('#showroom .group');
    items.forEach(item => {
        const title = item.querySelector('h3').innerText;
        if (title.includes(keyword) || keyword === 'all') {
            item.style.display = 'block';
            item.classList.add('animate-pulse');
            setTimeout(() => item.classList.remove('animate-pulse'), 500);
        } else {
            item.style.display = 'none';
        }
    });

    document.getElementById('showroom').scrollIntoView({ behavior: 'smooth' });
}

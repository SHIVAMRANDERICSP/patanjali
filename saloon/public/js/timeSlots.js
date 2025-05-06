document.addEventListener('DOMContentLoaded', () => {
    const timeSlotsList = document.getElementById('timeSlotsList');
    const newTimeSlotInput = document.getElementById('newTimeSlot');
    const addTimeSlotButton = document.getElementById('addTimeSlot');
    const saveTimeSlotsButton = document.getElementById('saveTimeSlots');

    addTimeSlotButton.addEventListener('click', () => {
        const newTimeSlot = newTimeSlotInput.value.trim();
        if (newTimeSlot) {
            const listItem = document.createElement('li');
            listItem.className = 'list-group-item d-flex justify-content-between align-items-center';
            listItem.innerHTML = `
                ${newTimeSlot.charAt(0).toUpperCase() + newTimeSlot.slice(1)}
                <button type="button" class="btn btn-danger btn-sm remove-time-slot" data-time-slot="${newTimeSlot}">Remove</button>
            `;
            timeSlotsList.appendChild(listItem);
            newTimeSlotInput.value = '';
        }
    });

    timeSlotsList.addEventListener('click', (event) => {
        if (event.target.classList.contains('remove-time-slot')) {
            event.target.closest('li').remove();
        }
    });

    saveTimeSlotsButton.addEventListener('click', () => {
        const timeSlots = Array.from(timeSlotsList.children).map(item => item.textContent.trim());
        // Save time slots via AJAX or form submission
        console.log('Time Slots:', timeSlots);
    });
});

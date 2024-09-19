// public/js/stepper.js

document.addEventListener('DOMContentLoaded', function() {
    const stepper = document.getElementById('stepper');
    const currentStep = parseInt(stepper.getAttribute('data-current-step'), 10);

    const stepContents = document.querySelectorAll('.step-content');
    const backBtn = document.getElementById('back-btn');
    const nextBtn = document.getElementById('next-btn');
    const sendBtn = document.getElementById('send-btn');

    function updateStep(step) {
        stepContents.forEach(content => {
            if (parseInt(content.id.replace('content-', ''), 10) === step) {
                content.classList.remove('hidden');
            } else {
                content.classList.add('hidden');
            }
        });

        backBtn.classList.toggle('hidden', step === 1);
        nextBtn.classList.toggle('hidden', step === 3);
        sendBtn.classList.toggle('hidden', step !== 3);
    }

    function handleButtonClick(isNext) {
        let step = currentStep;
        if (isNext && step < 3) {
            step++;
        } else if (!isNext && step > 1) {
            step--;
        }

        // Update the step on the page
        updateStep(step);

        // Optionally, update the server with the new step
        // fetch('/update-step', {
        //     method: 'POST',
        //     headers: {
        //         'Content-Type': 'application/json',
        //         'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        //     },
        //     body: JSON.stringify({ step: step })
        // });

        // Update the current step value
        stepper.setAttribute('data-current-step', step);
    }

    nextBtn.addEventListener('click', () => handleButtonClick(true));
    backBtn.addEventListener('click', () => handleButtonClick(false));

    // Initialize the view based on the current step
    updateStep(currentStep);
});

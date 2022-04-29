function checkAll() {
    const checkboxes = Array.from(document.querySelectorAll(".checkbox"));
    checkboxes.forEach((box) => {
        box.checked = true
    })
}

document.querySelector(".all").addEventListener('click', checkAll);

(function() {
    const form = document.querySelector('#trainForm');
    const checkboxes = form.querySelectorAll('input[type=checkbox]');
    const checkboxLength = checkboxes.length;
    const firstCheckbox = checkboxLength > 0 ? checkboxes[0] : null;
    const num = document.querySelector('#Tnumber').value;
    const start = document.getElementById("Sstation").value;
    const end = document.getElementById("Estation").value;
    const day2 = document.getElementById("day2");
    const time1 = document.getElementById("departure").value;
    const time2 = document.getElementById("arrival").value;

    function init() {
        if (firstCheckbox) {
            for (let i = 0; i < checkboxLength; i++) {
                checkboxes[i].addEventListener('change', checkValidity);
            }
        }
        checkValidity();
    }

    function isChecked() {
        for (let i = 0; i < checkboxLength; i++) {
            if (checkboxes[i].checked) return true;
        }
        return false;
    }

    function checkValidity() {
        const errorMessage = !isChecked() ? 'At least one checkbox must be selected.' : '';
        firstCheckbox.setCustomValidity(errorMessage);
    }

    function checkStops() {
        var ans = start.localeCompare(end);
        if (ans == 0) {
            const errorMessage3 = 'Start and End stations can not be same!';
            end.setCustomValidity(errorMessage3);
        }
    }

    function checkTime() {
        if (day2.value != "day2") {
            if (time1.localeCompare(time2)) {
                const errorMessage3 = 'Incorrect time!';
                time2.setCustomValidity(errorMessage3);
            }
        }
    }
    checkStops();
    checkTime();
    init();
})();









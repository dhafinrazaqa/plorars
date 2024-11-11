function toggleCheckbox(selected) {
    const checkboxSetuju = document.getElementById("btn-check-setuju");
    const checkboxTidakSetuju = document.getElementById("btn-check-tidak-setuju");

        if (selected === 'setuju') {
            if (checkboxSetuju.checked) {
                checkboxTidakSetuju.checked = false;
            }
        } else if (selected === 'tidak-setuju') {
            if (checkboxTidakSetuju.checked) {
                checkboxSetuju.checked = false;
            }
        }
    }

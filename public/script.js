async function showFreeReservationTime(selectedDate) {
    let reservationDiv = document.querySelector(".startTime-reservation-div-class");
    reservationDiv.innerHTML = "";

    
    let n = 0;
    for (let i = 9; i <= 19; i++) {
        for (let j = 0; j <= 5; j += 1) {
            let startTime = i + ":" + j + "0";
            if(i<10)
                startTime = "0" + i + ":" + j + "0";
            const timeButton = document.createElement("button");
            timeButton.value = startTime;
            timeButton.innerHTML = startTime;
            timeButton.className = `startTimeButton-${n} startTimeButton`;

            reservationDiv.appendChild(timeButton);
            n++;
        }
        reservationDiv.innerHTML += "<br>";
    }

    
    const timeButtons = document.querySelectorAll(".startTimeButton");
    reservations = await fetchStartTime(selectedDate);
    if(!reservations){
        console.error("No data off reservation");
        return;
    }
    reservations.forEach(reservation => {
        timeButtons.forEach(timeButton => {
            if ((timeButton.innerHTML + ":00") === reservation.startTime) {
                let timeButtonNumber = Number(timeButton.classList[0].split('-')[1]);
                const steps = reservation.treatmentDuration / 10;
                for (let i = timeButtonNumber; i < timeButtonNumber + steps; i++) {
                    const hiddenButton = document.querySelector(`.startTimeButton-${i}`);
                    if (hiddenButton) {
                        // hiddenButton.style.display = "none";
                        hiddenButton.disabled = true;
                        hiddenButton.style.backgroundColor = "red";

                    }
                }
            }
        });
    });

}

async function fetchStartTime(selectedDate){
    try {
        const response = await fetch('../src/reservation/reservation-fetcher.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body:JSON.stringify({selectedDate})
        });

        const result = await response.json(); // Parsiranje JSON odgovora

        if (result.success) {
            return result.data;
        } else {
            console.error("Greška:", result.message);
        }
    } catch (error) {
        console.error("Greška prilikom fetch zahteva:", error);
    }
}

// function timeListener(){
//     document.querySelectorAll(".startTimeButton").forEach(button => {
//     button.addEventListener("click", function() {
//         const selectedTimeInput = document.getElementById('selectedTime');
//         selectedTimeInput.value = this.value;
//         console.log(selectedTimeInput);
//     });
// })
// }


document.querySelector(".startTime-reservation-div-class").addEventListener("click", function(event) {
    if (event.target.classList.contains("startTimeButton")) {
        const selectedTimeInput = document.getElementById('selectedTime');
        document.getElementById("showSelectedTime").innerHTML = "Odabrani termin: " + event.target.value;
        selectedTimeInput.value = event.target.value;
        console.log("Izabrano vreme:", selectedTimeInput.value);
    }
});

const dateInput = document.querySelector("#dateInput");
dateInput.addEventListener('change',()=>{
    let selectedDate= dateInput.value;
    showFreeReservationTime(selectedDate);

})

document.getElementById("dateInput").value = new Date().toJSON().slice(0, 10);
showFreeReservationTime();
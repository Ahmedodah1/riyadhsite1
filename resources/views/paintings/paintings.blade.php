@extends('layout.master')
@section('content')
<section class="py-24 relative">
    <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
        <div class="w-full md:px-16 px-10 md:pt-16 pt-10 pb-10  rounded-2xl flex-col justify-end items-center lg:gap-28 md:gap-16 gap-10 inline-flex">
            <div class="flex-col justify-end items-center lg:gap-16 gap-10 flex">
                <img src="https://pagedone.io/asset/uploads/1717500460.png" alt="pagedone logo image" class="object-cover">
                <div class="flex-col justify-center items-center gap-10 flex">
                    <div class="flex-col justify-start items-center gap-2.5 flex">
                        <h2 class="text-center text-emerald-400 md:text-6xl text-5xl font-bold font-manrope leading-normal">Coming Soon</h2>
                        <p class="text-center text-gray-500 text-base font-normal leading-relaxed"></p>
                    </div>





</section>
<!--Javascript-->
<script>
    // count-down timer
    let dest = new Date("mar 31, 2024 23:59:59").getTime();
    let x = setInterval(function () {
        let now = new Date().getTime();
        let diff = dest - now;
        // Check if the countdown has reached zero or negative
        if (diff <= 0) {
            // Set the destination date to the same day next month
            let nextMonthDate = new Date();
            nextMonthDate.setMonth(nextMonthDate.getMonth() + 1);

            // If the current month is December, set the destination date to the same day next year
            if (nextMonthDate.getMonth() === 0) {
                nextMonthDate.setFullYear(nextMonthDate.getFullYear() + 1);
            }

            dest = nextMonthDate.getTime();
            return; // Exit the function
        }

        let days = Math.floor(diff / (1000 * 60 * 60 * 24));
        let hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((diff % (1000 * 60)) / 1000);

        if (days < 10) {
            days = `0${days}`;
        }

        if (hours < 10) {
            hours = `0${hours}`;
        }
        if (minutes < 10) {
            minutes = `0${minutes}`;
        }
        if (seconds < 10) {
            seconds = `0${seconds}`;
        }

        // Get elements by class name
        let countdownElements = document.getElementsByClassName("countdown-element");

        // Loop through the elements and update their content
        for (let i = 0; i < countdownElements.length; i++) {
            let className = countdownElements[i].classList[1]; // Get the second class name
            switch (className) {
                case "days":
                    countdownElements[i].innerHTML = days;
                    break;
                case "hours":
                    countdownElements[i].innerHTML = hours;
                    break;
                case "minutes":
                    countdownElements[i].innerHTML = minutes;
                    break;
                case "seconds":
                    countdownElements[i].innerHTML = seconds;
                    break;
                default:
                    break;
            }
        }
    }, 10);
</script>

@endsection

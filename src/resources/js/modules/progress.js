import $ from "jquery";

let currentMonth, currentYear;

function updateCalendar() {
    const monthNames = [
        "1月",
        "2月",
        "3月",
        "4月",
        "5月",
        "6月",
        "7月",
        "8月",
        "9月",
        "10月",
        "11月",
        "12月",
    ];
    $("#calendar-month").text(`${currentYear}年 ${monthNames[currentMonth]}`);
}

window.changeMonth = function (direction) {
    currentMonth += direction;
    if (currentMonth < 0) {
        currentMonth = 11;
        currentYear -= 1;
    } else if (currentMonth > 11) {
        currentMonth = 0;
        currentYear += 1;
    }
    updateCalendar();
};

window.openModal = function (day) {
    const modal = document.getElementById("modal");
    if (!modal) return;

    const modalTitle = document.getElementById("modal-title");
    if (modalTitle) {
        modalTitle.innerText = `${day}日のトレーニング内容`;
    }
    modal.classList.remove("hidden");
};

window.closeModal = function () {
    const modal = document.getElementById("modal");
    if (modal) {
        modal.classList.add("hidden");
    }
};

$(function () {
    if ($("main > div").data("page") != "progress") {
        return;
    }

    // progressページの場合のみ初期化
    currentMonth = new Date().getMonth();
    currentYear = new Date().getFullYear();

    // 初期表示
    updateCalendar();

    // カレンダーの日付クリックイベントを設定
    $(".calendar-day").on("click", function () {
        const day = $(this).data("day");
        openModal(day);
    });
});

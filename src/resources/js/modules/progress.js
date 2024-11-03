// グローバルスコープで関数を定義
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

// プログレスページ専用の初期化関数
function initProgressPage() {
    const calendarElement = document.getElementById("progress-calendar");
    if (!calendarElement) return;

    let currentMonth = new Date().getMonth();
    let currentYear = new Date().getFullYear();

    // カレンダーの更新関数
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
        calendarElement.innerText = `${currentYear}年 ${monthNames[currentMonth]}`;
    }

    // 月を変更する関数
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

    // 初期表示
    updateCalendar();

    // カレンダーの日付クリックイベントを設定
    document.querySelectorAll(".calendar-day").forEach((element) => {
        element.addEventListener("click", function () {
            const day = this.dataset.day;
            openModal(day);
        });
    });
}

// DOMContentLoaded時に初期化
document.addEventListener("DOMContentLoaded", initProgressPage);

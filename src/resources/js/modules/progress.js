class ProgressCalendar {
    constructor() {
        this.calendarElement = null;
        this.currentMonth = new Date().getMonth();
        this.currentYear = new Date().getFullYear();
        this.init();
    }

    init() {
        // 要素が見つかるまで待機
        const checkElement = setInterval(() => {
            this.calendarElement = document.getElementById("progress-calendar");
            if (this.calendarElement) {
                clearInterval(checkElement);
                this.initializeCalendar();
            }
        }, 100);
    }

    initializeCalendar() {
        this.updateCalendar();
        this.bindEvents();
    }

    updateCalendar() {
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
        this.calendarElement.innerText = `${this.currentYear}年 ${
            monthNames[this.currentMonth]
        }`;
    }

    changeMonth(direction) {
        this.currentMonth += direction;
        if (this.currentMonth < 0) {
            this.currentMonth = 11;
            this.currentYear -= 1;
        } else if (this.currentMonth > 11) {
            this.currentMonth = 0;
            this.currentYear += 1;
        }
        this.updateCalendar();
    }

    bindEvents() {
        // イベントリスナーの設定
        window.changeMonth = (direction) => this.changeMonth(direction);
        window.openModal = this.openModal;
        window.closeModal = this.closeModal;
    }

    openModal(day) {
        const modal = document.getElementById("modal");
        if (!modal) return;

        const modalTitle = document.getElementById("modal-title");
        if (modalTitle) {
            modalTitle.innerText = `${day}日のトレーニング内容`;
        }
        modal.classList.remove("hidden");
    }

    closeModal() {
        const modal = document.getElementById("modal");
        if (modal) {
            modal.classList.add("hidden");
        }
    }
}

// ページ固有の要素があるかどうかをチェック
if (document.querySelector('[data-page="progress"]')) {
    new ProgressCalendar();
}

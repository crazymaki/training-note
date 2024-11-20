import $ from "jquery";

$(function () {
    if ($("main > div").data("page") != "training") {
        return;
    }

    // APIエンドポイント
    const api_url = "/api/training/menus";

    window.addSet = function () {
        const newSet = $("<div>", {
            class: "flex space-x-4 mb-4",
        }).append(`
            <div class="flex-1">
                <input type="number" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="重量を入力">
            </div>
            <div class="flex-1">
                <input type="number" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="回数を入力">
            </div>
        `);

        $("#set-container").append(newSet);
    };

    $(document).on("change", "#training-category", function () {
        const params = {
            category_id: $(this).val(),
        };
        getTrainingmenu(params);
    });

    function getTrainingmenu(params) {
        // GETリクエストを送信
        axios
            .get(api_url, { params })
            .then((response) => {
                // 成功した場合の処理
                $("#training-menu").empty();
                response.data.forEach((item) => {
                    $("#training-menu").append(
                        `<option value="${item.exercises_id}">${item.exercise_name}</option>`
                    );
                });
            })
            .catch((error) => {
                // エラーが発生した場合の処理
                console.error(error);
            });
    }

    // 新規追加ボタン押下時
    $("#add-exercise-button").on("click", function () {
        $.get("/training/add-exercise-modal")
            .done(function (html) {
                const modalContainer = $("#modal-container");
                modalContainer.html(html);
                const modal = $("#add-exercise-modal");
                modal.removeClass("hidden");
                // モーダル初期表示時
                // 胸トレの内容を取得
                getTrainingmenu({ category_id: 1 });

                // モーダルを閉じる処理
                $("#close-modal").on("click", function () {
                    modal.addClass("hidden");
                });

                // フォーム送信処理
                $("#add-exercise-form").on("submit", function (e) {
                    e.preventDefault();
                    const formData = new FormData(this);
                    $.ajax({
                        url: "/training/add",
                        method: "POST",
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                                "content"
                            ),
                        },
                    })
                        .done(function (data) {
                            if (data.success) {
                                location.reload(); // ページをリロードして更新された情報を表示
                            } else {
                                alert(
                                    "エラーが発生しました。もう一度お試しください。"
                                );
                            }
                        })
                        .fail(function () {
                            alert(
                                "エラーが発生しました。もう一度お試しください。"
                            );
                        });
                });
            })
            .fail(function () {
                alert("モーダルの読み込みに失敗しました。");
            });
    });
});

import $ from "jquery";

$(function () {
    if ($("main > div").data("page") != "training") {
        return;
    }

    // APIエンドポイント
    const api_url = "/api/training/menus";

    $("#training-category").on("change", function () {
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
});

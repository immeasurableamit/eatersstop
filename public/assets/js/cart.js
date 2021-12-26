$(".update-cart").change(function (e) {
    e.preventDefault();

    var ele = $(this);

    $.ajax({
        url: updateUrl,
        method: "post",
        data: {
            _token: _token, 
            id: ele.parents("tr").attr("data-id"), 
            quantity: ele.parents("tr").find(".quantity").val()
        },
        success: function (response) {
           window.location.reload();
        }
    });
});

$(".remove-from-cart").click(function (e) {
    e.preventDefault();

    var ele = $(this);

    if(confirm("Are you sure want to remove?")) {
        $.ajax({
            url: removeUrl,
            method: "post",
            data: {
                _token: _token, 
                id: ele.parents("tr").attr("data-id")
            },
            success: function (response) {
                window.location.reload();
            }
        });
    }
});
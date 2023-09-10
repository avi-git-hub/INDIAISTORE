$(document).ready(function () {
  var base_url = $("base").attr("href");

  $(document).on("click", "#trend_search_add", function (e) {
    e.preventDefault();
    var trend_search_name = $("#trend_search_name").val();
    var trend_search_cta = $("#trend_search_cta").val();

    if (!trend_search_name) {
      $("#trend_search_name").addClass("is-invalid");
    } else if (!trend_search_cta) {
      $("#trend_search_cta").addClass("is-invalid");
    } else {
      $("#trend_search_name,#trend_search_cta").removeClass("is-invalid");
      add_new_trend_search(trend_search_name, trend_search_cta, function (response) {
        if (response.status == true) {
          $(".empty_table_class").remove();
          var deleteButton = `<a href="${base_url}admin/search/trending/${response.info}/delete" role="button" class="text-danger delete-row">
                              <i class="fa fa-trash"></i>
                          </a>`;
          var markup = `<tr>
          <td>${trend_search_name}</td>
          <td>${trend_search_cta}</td>
          <td>${deleteButton}</td>`;

          $("table tbody").append(markup);
          $("#trend_search_name,#trend_search_cta").val(null).trigger("change");
          alert(response.message);
        } else {
          alert("Something went wrong. Please try again!");
        }
      });
    }
  });

  $(document).on("click", ".delete-row", function (e) {
    e.preventDefault();
    var confirmatn = confirm("Do you wish to delete this trending search");

    var row = $(this);
    var row_href = $.trim($(this).attr("href"));

    if (row_href && confirmatn) {
      delete_trend_search(row_href, function (response) {
        if (response.status == true) {
          alert(response.message);
          row.parents("tr").first().remove();
        } else {
          alert("Something went wrong!");
        }
      });
    }
  });

  function add_new_trend_search(name, cta, callback) {
    // var result;
    var formData = new FormData();

    formData.append("name", $.trim(name));
    formData.append("cta", $.trim(cta));

    var ajax_call = $.ajax({
      cache: false,
      contentType: false,
      data: formData,
      processData: false,
      type: "POST",
      url: "/admin/search/trending",
    });

    ajax_call.done(function (response, status) {
      callback(response);
    });

    ajax_call.fail(function (data, status, error) {
      console.log({ data: data, status: status, error: error });
      callback({ status: false });
    });

    ajax_call.always(function (data, status, error) {
      // console.log({ data: data, status: status, error: error });
    });
  }

  function delete_trend_search(delete_url, callback) {
    var ajax_call = $.ajax({
      cache: false,
      contentType: false,
      processData: false,
      type: "POST",
      url: delete_url,
    });

    ajax_call.done(function (response, status) {
      callback(response);
    });

    ajax_call.fail(function (data, status, error) {
      console.log({ data: data, status: status, error: error });
      callback({ status: false });
    });

    ajax_call.always(function (data, status, error) {
      // console.log({ data: data, status: status, error: error });
    });
  }
});

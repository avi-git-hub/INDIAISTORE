$(document).ready(function () {
  var base_url = $("base").attr("href");

  $(document).on("click", "#other_search_add", function (e) {
    e.preventDefault();
    var other_search_name = $("#other_search_name").val();
    var other_search_tags = $("#other_search_tags").val();
    var other_search_cta = $("#other_search_cta").val();

    if (!other_search_tags) {
      $("#other_search_tags").addClass("is-invalid");
    } else if (!other_search_cta) {
      $("#other_search_cta").addClass("is-invalid");
    } else if (!other_search_name) {
      $("#other_search_name").addClass("is-invalid");
    } else {
      $("#other_search_tags,#other_search_cta,#other_search_name").removeClass("is-invalid");
      add_other_search(other_search_tags, other_search_cta, other_search_name, function (response) {
        if (response.status == true) {
          $(".empty_table_class").remove();
          var deleteButton = `<a href="${base_url}admin/search/other/${response.info}/delete" role="button" class="text-danger delete-row">
                              <i class="fa fa-trash"></i>
                          </a>`;
          var markup = `<tr>
          <td>${other_search_name}</td>
          <td>${other_search_tags}</td>
          <td>${other_search_cta}</td>
          <td>${deleteButton}</td>`;

          $("table tbody").append(markup);
          $("#other_search_tags,#other_search_cta,#other_search_name").val(null).trigger("change");
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
      delete_other_search(row_href, function (response) {
        if (response.status == true) {
          alert(response.message);
          row.parents("tr").first().remove();
        } else {
          alert("Something went wrong!");
        }
      });
    }
  });

  function add_other_search(tags, cta, name, callback) {
    // var result;
    var formData = new FormData();

    formData.append("tags", $.trim(tags));
    formData.append("cta", $.trim(cta));
    formData.append("name", $.trim(name));

    var ajax_call = $.ajax({
      cache: false,
      contentType: false,
      data: formData,
      processData: false,
      type: "POST",
      url: "/admin/search/other",
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

  function delete_other_search(delete_url, callback) {
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

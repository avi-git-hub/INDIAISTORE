$(document).ready(function () {
  // custom file input
  bsCustomFileInput.init();
  $("#partner_is_pan_india").bootstrapSwitch();

  // initialize select2 elements
  $(".select2bs4").select2({
    theme: "bootstrap4",
    allowClear: true,
  });

  $(document).on("click", ".add-row", function (e) {
    e.preventDefault();
    var partner_product_val = Number($("#partner_product").val());
    var partner_product = $("#partner_product option:selected").text();
    var partner_product_link = $("#partner_product_link").val();
    var deleteButton = `<a href="javascript:void(0)" role="button" class="text-danger">
                              <i class="fa fa-trash"></i>
                          </a>`;
    var markup = `<tr>
          <td>${partner_product_val}</td>
          <td>${partner_product}</td>
          <td>${partner_product_link}</td>
          <td>${deleteButton}</td>
         </tr>`;
    if (!partner_product_val) {
      $("#partner_product").addClass("is-invalid");
    } else if (!partner_product_link) {
      $("#partner_product_link").addClass("is-invalid");
    } else {
      if ($("table tbody tr").length < 1) {
        $("table tbody").append(markup);
        $("#partner_product,#partner_product_link").val(null).trigger("change");
      } else {
        var count = true;
        $("table tbody tr").each(function (a, b) {
          var newID = Number($(this).find("td").html());
          if (partner_product_val == newID) count = false;
        });
        if (count == true) {
          $("table tbody").append(markup);
          $("#partner_product,#partner_product_link").val(null).trigger("change");
        }
      }
    }
  });

  $(document).on("click", ".delete-row", function () {
    var confirmatn = confirm("Do you want to delete this product");
    var partner_id = $("#partner_id").val();
    var product_id = $(this).data("recordId");
    var row = $(this);

    if (confirmatn) {
      $.ajax({
        cache: false,
        dataType: "json",
        data: { partner_id, product_id },
        type: "POST",
        url: "/admin/partner/delete_partner_product",
        success: function (response) {
          console.log(response);
          if (response.status == true) {
            alert(response.message);
            row.parents("tr").first().remove();
          } else {
            alert(response.message);
          }
        },
        error: function (error) {
          console.log(response);
          alert("Something went wrong!");
        },
      });
    }
  });

  $(document).on("click", "#partner_submit", function (e) {
    e.preventDefault();

    $(this).prop("disabled", true);

    var formData = new FormData($("#partner_form")[0]);

    var cellContents = $("table tbody tr")
      .map(function () {
        return {
          id: $("td:eq(0)", this).html(),
          url: $("td:eq(2)", this).html(),
        };
      })
      .get();

    if (cellContents.length > 0) {
      formData.append("partner_product_url", JSON.stringify(cellContents));
    }

    $.ajax({
      cache: false,
      contentType: false,
      data: formData,
      processData: false,
      type: "POST",
      // url: "/admin/partner/edit/",
      success: function (data) {
        if (data.success) {
          alert("Partner has been updated successfully!");
          window.location.href = "admin/partners";
        } else if (data.error) {
          alert(data.error);
        }

        if (data.errors) {
          console.log(data.errors);
          $.each(data.errors, function (key, value) {
            if (value) {
              console.log(value);
              $("#" + key).addClass("is-invalid");
              $("#" + key)
                .parents(".form-group")
                .find(".error-div")
                .html(`<small class="error text-danger">${value}</small>`);
            } else {
              $("#" + key).removeClass("is-invalid");
              $("#" + key)
                .parents(".form-group")
                .find(".error-div")
                .html("");
              // .addClass("is-valid");
            }
          });
        }
      },
      complete: function () {
        $("#partner_submit").prop("disabled", false);
      },
    });
  });

  $("#partner_is_pan_india").on("switchChange.bootstrapSwitch", function () {
    var divRow = $("#state_city_row");
    divRow.toggle("slow");
    divRow.find(".error-div").html("");
    divRow.find("select").removeClass("is-invalid");
  });
});

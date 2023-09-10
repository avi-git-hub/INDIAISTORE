$(document).ready(function () {
  var base_url = $("base").attr("href");
  /* Datatable starts */
  var storeTable = $("#store_manage_table").DataTable({
    order: [[0, "desc"]],
    paging: true,
    lengthChange: true,
    searching: true,
    ordering: true,
    info: true,
    autoWidth: false,
    responsive: true,
    lengthMenu: [
      [5, 10, 25, 50, -1],
      [5, 10, 25, 50, "All"],
    ],
    processing: true,
    serverSide: true,
    serverMethod: "post",
    ajax: {
      url: "/admin/store/store_list",
    },
    columns: [
      { data: "id", sTitle: "Id", bVisible: true },
      { data: "state", sTitle: "State" },
      { data: "city", sTitle: "City" },
      { data: "name", sTitle: "Name" },
      {
        data: "logo",
        sTitle: "Logo",
        mRender: function (data, type, row) {
          bindHtml = `<a href="${data}" class="text-dark" data-lightbox="lb_${row.id}" data-title="unicorn" title="View Partner Logo">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                      </a>`;

          return bindHtml;
        },
      },
      { data: "pincode", sTitle: "Pincode" },
      { data: "type", sTitle: "Type" },
      {
        sTitle: "Action",
        mRender: function (data, type, row) {
          bindHtml = `<a href="${base_url}admin/store/edit/${row.id}" target="_self" role="button" class="btn btn-sm btn-dark">
                          <i class="fa fa-edit"></i>
                      </a> 
                      <a href="javascript:void(0)" target="_self" role="button" class="btn btn-sm btn-dark"  data-record-id="${row.id}" data-record-title="${row.name}" data-toggle="modal" data-target="#store_confirm_delete" role="button" class="btn btn-sm btn-dark">
                        <i class="fa fa-trash"></i>
                      </a>`;

          return bindHtml;
        },
      },
    ],
    columnDefs: [
      // {
      //   targets: [0],
      //   visible: false,
      //   searchable: false,
      // },
      {
        render: function (data, type, row) {
          return data.toUpperCase();
        },
        targets: [5],
      },
    ],
  });
  /* Datatable ends */

  $("#store_confirm_delete").on("click", ".btn-ok", function (e) {
    var $modalDiv = $(e.delegateTarget);
    var id = $(this).data("recordId");

    $.ajax({
      cache: false,
      contentType: false,
      dataType: "json",
      processData: false,
      type: "POST",
      url: "/admin/store/delete/" + id,
      success: function (response) {
        if (response.status == true) {
          alert(response.message);
          storeTable.ajax.reload();
        } else {
          alert(response.message);
          storeTable.ajax.reload();
        }
      },
      error: function (error) {
        alert("Something went wrong!");
        storeTable.ajax.reload();
      },
    });

    $modalDiv.addClass("loading");
    setTimeout(function () {
      $modalDiv.modal("hide").removeClass("loading");
    }, 1000);
  });

  $("#store_confirm_delete").on("show.bs.modal", function (e) {
    var data = $(e.relatedTarget).data();
    $(".title", this).text(data.recordTitle);
    $(".btn-ok", this).data("recordId", data.recordId);
  });
});

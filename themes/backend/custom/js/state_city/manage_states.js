$(document).ready(function () {
  $('#states_table').DataTable({
    autoWidth: true,
    info: true,
    lengthChange: true,
    ordering: true,
    order: [],
    lengthMenu: [
      [5, 10, 25, 50, -1],
      [5, 10, 25, 50, 'All'],
    ],
    paging: true,
    responsive: true,
    searching: true,
  });
});

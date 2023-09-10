//Compare Module

$(".product-selector").each(function() {
    $(this).data('__old', this.value);
}).change(function() {
    var $this = $(this),
        value = $this.val(),
        oldValue = $this.data('__old'),
        col = $this.attr('id').replace('product-col-', ''),
        dupe, dupeCol;

    dupe = $(".product-selector").not(this).filter(function() {
        return this.value == value;
    });

    if (dupe.length) {
        dupe.val(oldValue).data('__old', oldValue);
        dupeCol = dupe.attr('id').replace('product-col-', '');
        $(".product-col").removeClass('compare-col-' + dupeCol);
        $("#" + oldValue).addClass('compare-col-' + dupeCol);
    }

    $(".product-col").removeClass('compare-col-' + col);
    $("#" + value).addClass('compare-col-' + col);
    $this.data('__old', value)
});
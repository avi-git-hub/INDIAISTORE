 $(document).ready(function() { $(".panel-heading").on('click',function(){ $(this).addClass('active'); $(this).closest('.panel-default').siblings().find('.panel-heading').removeClass('active'); $(this).closest('.panel-default').siblings().find('.panel-collapse').removeClass('show');
});
});
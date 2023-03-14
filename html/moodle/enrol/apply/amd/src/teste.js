define(['jquery', 'enrol_apply/js-year-calendar', 'core/log', 
], function($, calendar, log) {
    
    "use strict"; // jshint ;_;
    log.debug('TesteMGBF inicializado');

    return {
        init: function() {
            //$("<div class='overflow:visible' id='calendar'></div>").insertAfter("div.generalbox"); 
            Calendar.locales.pt = {
                days: ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"],
                daysShort: ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb"],
                daysMin: ["Do", "Se", "Te", "Qu", "Qu", "Se", "Sa"],
                months: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
                monthsShort: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
                weekShort: 'S',
                weekStart:0
            };
            var calendar = new Calendar("#calendar", {
                language: 'pt',
                style: 'border'
            });
            let dataSource = [];
            calendar.setDataSource(dataSource);

        }
    }
});
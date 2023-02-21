import "@fullcalendar/core/vdom";
import { Calendar } from "@fullcalendar/core";
import interactionPlugin, { Draggable } from "@fullcalendar/interaction";
import dayGridPlugin from "@fullcalendar/daygrid";

(function () {
    if ($("#calendar1").length) {
        if ($("#calendar-events").length) {
            new Draggable($("#calendar-events")[0], {
                itemSelector: ".event",
                eventData: function (eventEl) {
                    return {
                        title: $(eventEl).find(".event__title").html(),
                        duration: {
                            days: parseInt(
                                $(eventEl).find(".event__days").text()
                            ),
                        },
                    };
                },
            });
        }

        let calendar = new Calendar($("#calendar")[0], {
            plugins: [interactionPlugin, dayGridPlugin],
            droppable: true,
            headerToolbar: {
                left: "prev",
                center: "title",
                right: "next",
            },
            initialView: "dayGridMonth",
            initialDate: "2021-01-12",
            navLinks: true,
            editable: true,
            dayMaxEvents: true,
            events: [],
        });

        calendar.render();
    }
})();

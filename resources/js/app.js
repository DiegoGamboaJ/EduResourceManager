import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// import { Datepicker, Input, Select, initTE } from "tw-elements";
// initTE({ Datepicker, Input, Select });

// import {
//     Modal,
//     Ripple,
//     initTE,
//   } from "tw-elements";

//   initTE({ Modal, Ripple });

const filterFunction = (date) => {
    const isSaturday = date.getDay() === 6;
    const isSunday = date.getDay() === 0;

    return !isSaturday && !isSunday;
  };

  new te.Datepicker(
    document.getElementById('datepicker-element'),
    {
      filter: filterFunction,
      title: "Seleccionar Fecha",
      monthsFull: [
        "Enero",
        "Febrero",
        "Marzo",
        "Abril",
        "Mayo",
        "Junio",
        "Julio",
        "Agosto",
        "Septiembre",
        "Octubre",
        "Noviembre",
        "Diciembre",
      ],
      monthsShort: [
        "En",
        "Feb",
        "Mar",
        "Abr",
        "May",
        "Jun",
        "Jul",
        "Ag",
        "Sept",
        "Oct",
        "Nov",
        "Dic",
      ],
      weekdaysFull: [
        "Domingo",
        "Lunes",
        "Martes",
        "Miércoles",
        "Jueves",
        "Viernes",
        "Sábado",
      ],
      weekdaysShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"],
      weekdaysNarrow: ["D", "L", "M", "X", "J", "V", "S"],
      okBtnText: "Aceptar",
      clearBtnText: "Limpiar",
      cancelBtnText: "Cancelar",
      startDay: 1,
    }
  );

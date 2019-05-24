var doc = new jsPDF();
var formData = new FormData();

console.log(Translator.locale);

Vue.component("reactive-stacked-bar-chart", {
  props: ["stack_bar_chart"],
  template: '<div :ref="stack_bar_chart.uuid"></div>',
  mounted() {
    Plotly.plot(this.$refs[this.stack_bar_chart.uuid], this.stack_bar_chart.traces, this.stack_bar_chart.layout, this.stack_bar_chart.config);
  },
  watch: {
    stack_bar_chart: {
      handler: function() {
        // console.log("Chargement...");
        Plotly.react(
          this.$refs[this.stack_bar_chart.uuid],
          this.stack_bar_chart.traces,
          this.stack_bar_chart.layout,
          this.stack_bar_chart.config
        );

        Plotly.toImage(this.$refs[this.stack_bar_chart.uuid], {
          format: 'jpeg',
          width: 600,
          height: 600
        }).then(function(dataUrl) {
          $('input#simulation_stack_bar_chart').val(dataUrl);
        })
      },
      deep: true
    }
  }
});

Vue.component("reactive-dual-line-chart", {
  props: ["dual_line_chart"],
  template: '<div :ref="dual_line_chart.uuid"></div>',
  mounted() {
    Plotly.plot(this.$refs[this.dual_line_chart.uuid], this.dual_line_chart.traces, this.dual_line_chart.layout, this.dual_line_chart.config);
  },
  watch: {
    dual_line_chart: {
      handler: function() {
        // console.log("Chargement...");
        Plotly.react(
          this.$refs[this.dual_line_chart.uuid],
          this.dual_line_chart.traces,
          this.dual_line_chart.layout,
          this.dual_line_chart.config
        );

        Plotly.toImage(this.$refs[this.dual_line_chart.uuid], {
          format: 'jpeg',
          width: 600,
          height: 600
        }).then(function(dataUrl) {
          $('input#simulation_dual_line_chart').val(dataUrl);
        })
      },
      deep: true
    }
  }
});

Vue.component("reactive-dual-line-chart2", {
  props: ["dual_line_chart2"],
  template: '<div :ref="dual_line_chart2.uuid"></div>',
  mounted() {
    Plotly.plot(this.$refs[this.dual_line_chart2.uuid], this.dual_line_chart2.traces, this.dual_line_chart2.layout, this.dual_line_chart2.config);
  },
  watch: {
    dual_line_chart2: {
      handler: function() {
        // console.log("Chargement...");
        Plotly.react(
          this.$refs[this.dual_line_chart2.uuid],
          this.dual_line_chart2.traces,
          this.dual_line_chart2.layout,
          this.dual_line_chart2.config
        );

        Plotly.toImage(this.$refs[this.dual_line_chart2.uuid], {
          format: 'jpeg',
          width: 600,
          height: 600
        }).then(function(dataUrl) {
          $('input#simulation_dual_line_chart2').val(dataUrl);
        })
      },
      deep: true
    }
  }
});

const simulation = new Vue({
  delimiters: ['${', '}'],
  el: '#simulation',
  data: {
    form: {
      nbDayWork: null,
      workRotation: " ", //not null because makes select bug
      rateQuality: null,
      plannedDowntime: null,
      unplannedDowntime: null,
      nominalCadence: 8000,
      realCadence: 6500
    },
    anonymeEmail: null,
    anonymeCompany: null,
    stack_bar_chart: {
      uuid: "123",
      traces: [{
          y: [],
          name: Translator.trans('foo'),
          orientation: 'v',
          text: [],
          textposition: 'auto',
          marker: {
            color: 'rgba(8, 41, 71, 1)',
            width: 1
          },
          type: 'bar'
        },
        {
          y: [],
          name: '% Pertes Arrêts',
          orientation: 'v',
          text: [],
          textposition: 'auto',
          type: 'bar',
          marker: {
            color: 'rgba(55, 128, 191, 1)',
            width: 1
          }
        },
        {
          y: [],
          name: '% Pertes Performances',
          orientation: 'v',
          text: [],
          textposition: 'auto',
          type: 'bar',
          marker: {
            color: 'rgba(187, 210, 225, 1)',
            width: 1
          }
        },
        {
          y: [],
          name: '% Pertes Qualités',
          orientation: 'v',
          text: [],
          textposition: 'auto',
          type: 'bar',
          marker: {
            color: 'rgba(41, 183, 116, 1)',
            width: 1
          }
        },
        {
          y: [],
          name: '% Pertes Inexpliquées',
          orientation: 'v',
          text: [],
          textposition: 'auto',
          type: 'bar',
          marker: {
            color: 'rgba(15, 112, 63, 1)',
            width: 1
          }
        }
      ],
      layout: {
        showlegend: true,
        legend: {
          x: 1,
          y: 0.1
        },
        barmode: 'stack',
        yaxis: {
          fixedrange: true
        },
        xaxis: {
          fixedrange: true,
          showticklabels: false
        }
      },
      config: {
        displayModeBar: false,
        responsive: true
      }
    },
    dual_line_chart: {
      uuid: "124",
      traces: [{
          x: [],
          y: [],
          mode: 'lines+markers',
          name: 'réduction de 20% des pertes',
          type: 'scatter',
          text: '€ économisés',
          line: {
            dash: 'solid',
            color: 'rgba(8, 41, 71, 1)',
            width: 2
          }
        },
        {
          x: [],
          y: [],
          mode: 'lines+markers',
          name: 'réduction de 40% des pertes',
          type: 'scatter',
          text: '€ économisés',
          line: {
            dash: 'dashdot',
            color: 'rgba(41, 183, 116, 1)',
            width: 2
          }
        }
      ],
      layout: {
         xaxis: {
          title: 'Coût horaire de votre ligne (€)',
          titlefont: {
            family: 'Arial, sans-serif',
            size: 18,
            color: 'rgba(8, 41, 71, 1)'
          },
          dtick: 200,
          fixedrange: true,
        },
        yaxis: {
          title: 'Économies potentielles (€)',
          titlefont: {
            family: 'Arial, sans-serif',
            size: 18,
            color: 'rgba(8, 41, 71, 1)'
          },
          fixedrange: true
        },
        legend: {
          x: 0,
          y: 1.1,
          traceorder: 'reversed',
          font: {
            size: 14
          },
          yref: 'paper'
        }
      },
      config: {
        displayModeBar: false,
        responsive: true
      }
    },
    dual_line_chart2: {
      uuid: "124",
      traces: [{
          x: [],
          y: [],
          mode: 'lines+markers',
          name: 'réaffectation des 20% de pertes économisées',
          type: 'scatter',
          text: '€ ; gain de CA potentiel',
          line: {
            dash: 'solid',
            color: 'rgba(8, 41, 71, 1)',
            width: 2
          }
        },
        {
          x: [],
          y: [],
          mode: 'lines+markers',
          name: 'réaffectation des 40% de pertes économisées',
          type: 'scatter',
          text: '€ ; gain de CA potentiel',
          line: {
            dash: 'dashdot',
            color: 'rgba(41, 183, 116, 1)',
            width: 2
          }
        }
      ],
      layout: {
        xaxis: {
          title: "Chiffre d'affaires actuel généré par cette ligne (M€)",
          // Attention, on affiche directement des millions d'euros sur x
          titlefont: {
            family: 'Arial, sans-serif',
            size: 18,
            color: 'rgba(8, 41, 71, 1)'
          },
          dtick: 2.5,
          fixedrange: true,
        },
        yaxis: {
          title: 'Gain de CA potentiel (€)',
          titlefont: {
            family: 'Arial, sans-serif',
            size: 18,
            color: 'rgba(8, 41, 71, 1)'
          },
          fixedrange: true
        },
        legend: {
          x: 0,
          y: 1.1,
          traceorder: 'reversed',
          font: {
            size: 14
          },
          yref: 'paper'
        }
      },
      config: {
        displayModeBar: false,
        responsive: true
      }
    }
  },
  methods: {
    updateData() {
      this.stack_bar_chart.layout.datarevision = new Date().getTime();
      // console.log(this.stack_bar_chart.layout.datarevision);

      // Create TRS chart
      this.Generate_TRS_chart();

      // console.log("Exec.");

      // Create economic chart from user's data
      this.Generate_economic_chart();

      // Create gain chart from user's data
      this.Generate_gain_chart();

      // console.log("Exec.");
    },
    Generate_TRS_chart() {
      var nbTraces = this.stack_bar_chart.traces.length;

      var ChartValues = [
        this.AddedValue,
        this.PerteArrets,
        this.PertePerfs,
        this.PerteQuality,
        this.PerteInex
      ];

      var AroundNumber = 1;

      for (var i = 0; i < nbTraces; i++) {
        this.stack_bar_chart.traces[i].y.pop();
        this.stack_bar_chart.traces[i].y.push(this.Truncate(ChartValues[i], AroundNumber));
        // this.stack_bar_chart.traces[i].text.pop();
        // this.stack_bar_chart.traces[i].text.push(this.Truncate(ChartValues[i], AroundNumber));
      }
    },
    Generate_economic_chart() {
      for (var i = 0; i < this.dual_line_chart.traces.length; i++) {
        this.dual_line_chart.traces[i].y = [];
        this.dual_line_chart.traces[i].x = [];
      }

      var start;
      var start_for;
      var tick;
      var nbRepeat;

      start_for = 1
      nbRepeat = 14 - start_for;

      for (var i = start_for; i <= (nbRepeat); i++) {
        start = 100;
        tick = i * 100 + start;

        this.dual_line_chart.traces[0].x.push(tick);
        this.dual_line_chart.traces[0].y.push(this.Economie(tick, 20));

        this.dual_line_chart.traces[1].x.push(tick);
        this.dual_line_chart.traces[1].y.push(this.Economie(tick, 40));
      }
    },
    Generate_gain_chart() {
      for (var i = 0; i < this.dual_line_chart2.traces.length; i++) {
        this.dual_line_chart2.traces[i].y = [];
        this.dual_line_chart2.traces[i].x = [];
      }

      var start;
      var start_for;
      var tick;
      var nbRepeat;

      start_for = 1
      nbRepeat = 14 - start_for;

      for (var i = start_for; i <= (nbRepeat); i++) {
        // Attention, calcul normal avec des euros mais affichage sur x de millions d'euros
        start = 2.5;
        tick = (i - 1) * 2.5 + start;
        tick2 = tick * 1000000;

        this.dual_line_chart2.traces[0].x.push(tick);
        this.dual_line_chart2.traces[0].y.push(this.GainCA(tick2, 20));

        this.dual_line_chart2.traces[1].x.push(tick);
        this.dual_line_chart2.traces[1].y.push(this.GainCA(tick2, 40));
      }
    },
    Around(x, n) {
      return Number.parseFloat(x).toFixed(n);
    },
    Truncate(x, n) {
      var number = Math.floor(x);
      var fdecimal = (x - number) + '';

      if (fdecimal.length > (n + 2)) {
        fdecimal = fdecimal.substr(0, (n + 2));
      }

      var returnValue = (number / 1 + fdecimal / 1);

      return returnValue.toFixed(n);
    },
    Economie(x, y) {
      if (!this.TempsRequis) {
        return 0;
      } else {
        // return ((y / 100) * this.TempsRequis * x);
        return ((y / 100) * (100 - this.AddedValue) / 100 * this.TempsRequis * x);
      }
    },
    GainCA(x, y) {
      if (!this.AddedValue) {
        return 0;
      } else {
        return ((y / 100) * (100 - this.AddedValue) * (x / this.AddedValue));
      }
    },
    exportPdf() {
      var dataName = [
        "TauxDispo",
        "TauxPerf",
        "TauxQuality",
        "AddedValue",
        "PerteArrets",
        "PertePerfs",
        "PerteQuality",
        "PerteInex"
      ];

      var dataSend = [
        this.TauxDispo,
        this.TauxPerf,
        this.TauxQuality,
        this.AddedValue,
        this.PerteArrets,
        this.PertePerfs,
        this.PerteQuality,
        this.PerteInex,
      ];

      //console.log(dataSend);

      for (var i = 0; i < dataSend.length; i++) {
        $('input#simulation_' + dataName[i]).val(this.Truncate(dataSend[i], 1));
      }

      $('input#simulation_anonymeEmail').val(this.anonymeEmail);
      $('input#simulation_anonymeCompany').val(this.anonymeCompany);

      $('form#test').submit();
    }
  },
  computed: {
    TempsOuverture() {
      return (this.form.nbDayWork * (this.form.workRotation * 8));
    },
    TempsRequis() {
      return (this.TempsOuverture - (this.form.plannedDowntime * (this.form.workRotation * 8)));
    },
    TempsFonct() {
      return (this.TempsRequis - (this.form.unplannedDowntime * (this.form.workRotation * 8)));
    },
    TempsNominal() {
      return (this.TempsFonct * (this.form.realCadence / this.form.nominalCadence));
    },
    TempsUtile() {
      return (this.TempsNominal * (this.TauxQuality / 100));
    },
    TauxDispo() {
      return ((this.TempsFonct / this.TempsRequis) * 100);
    },
    TauxPerf() {
      return ((this.form.realCadence / this.form.nominalCadence) * 100);
    },
    TauxQuality() {
      return (this.form.rateQuality);
    },
    AddedValue() {
      if (!this.TauxDispo) {
        return 0;
      } else {
        return (this.TauxDispo * this.TauxPerf * this.TauxQuality / 10000);
      }
    },
    PerteArrets() {
      return (((this.form.unplannedDowntime * (this.form.workRotation * 8)) / this.TempsRequis) * 100);
    },
    PertePerfs() {
      return (((this.TempsFonct * (1 - (this.form.realCadence / this.form.nominalCadence))) / this.TempsRequis) * 100);
    },
    PerteQuality() {
      return (((this.TempsNominal * (1 - (this.TauxQuality * 0.01))) / this.TempsRequis) * 100);
    },
    PerteInex() {
      if (!this.AddedValue) {
        return 0;
      } else {
        return (this.Around((100 - this.Truncate(this.PerteArrets, 1) - this.Truncate(this.PertePerfs, 1) - this.Truncate(this.PerteQuality, 1) - this.Truncate(this.AddedValue, 1)), 1));
      }
    }
  },
  watch: {
    form: {
      handler: function() {
        this.updateData();
      },
      deep: true
    }
  }
})

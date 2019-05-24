<?php include 'head.htm'; ?>

<head>
  <script src="assets/js/vue.js"></script>
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
</head>

<body>
  <?php include 'header.htm'; ?>

  <!-- Header with background image -->
  <header id="bg-contact" class="bg-section container-fluid">
    <div class="row">
      <!-- Content -->
      <div class="container py-header-section">
        <div class="row">
          <!-- Responsive col -->
          <div class="col-10 col-lg-8 mx-auto">
            <!-- Header text -->
            <p class="bg-title text-center text-white m-0"> Estimez vos performances et votre potentiel d'économies</p>
			<p class="col-12 text-center m-0 main-title"><br><b> en moins d'une minute !</b></p>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End Header -->

  <main id="simulation">
    <!-- Content with section padding top/bottom -->
    <div class="container py-section">
      <!-- Section Title -->
      <h3 class="title-1 text-left mb-4">
        <span class="underline underline-secondary">
          Quelles performances ?
        </span>
      </h3>
      <div class="row">
        <div class="col-12 col-lg-6">
          <p class="col-12 col-lg-10 p-0 pl-lg-3 mb-5 mb-lg-0" align="justify">
            <b> Service, disponibilité, qualité… et coûts cachés </b><br> Si la satisfaction client reste une priorité, la performance industrielle n’en est pas moins multicritères ! Nous vous proposons de jeter un regard critique sur les coûts cachés que suppose votre activité productive, et de vous projeter dans une démarche proactive.<br>
            <br><b> Moins d’une minute  </b><br> Choisissez une ligne de production représentative de votre activité et laissez-vous guider. Notre outil propose une estimation rapide de vos performances industrielles (temps à valeur ajoutée, cartographie des pertes…), et révèle les économies que vous pourriez réaliser en ciblant vos efforts.<br>
			</p>
        </div>
        <div class="col-12 col-lg-6">
          <form action="">
            <!-- NbDayWork -->
            <div class="form-row">
              <!-- Number Day Worked section -->
              <div class="form-group col-md-12">
                <label for="nbDayWork">
                  Nombre de jours travaillés (par an)
                </label>
                <div class="d-block">
                  <input type="radio" id="one" value="320" v-model="form.nbDayWork">
                  <label for="one">
                    > 300
                  </label>
                  <input class="ml-2" type="radio" name="two" value="275" v-model="form.nbDayWork">
                  <label for="two">
                    250 - 300
                  </label>
                  <input class="ml-2" type="radio" name="three" value="225" v-model="form.nbDayWork">
                  <label for="three">
                    200 - 250
                  </label>
                  <div class="d-block d-md-inline d-lg-block d-xl-inline ml-0 ml-md-3 ml-lg-0 ml-xl-3">
                    <input type="radio" name="other" v-if="form.nbDayWork" checked>
                    <input type="radio" name="other" v-else>
                    <label for="other">Autre: <input type="number" class="form-control w-75 d-inline" min="0" max="365" v-model="form.nbDayWork"></label>
                  </div>
                </div>
              </div>
            </div>

            <!-- WorkRotation and RateQuality -->
            <div class="form-row">
              <!-- Work Rotation section -->
              <div class="form-group col-md-6">
                <label for="workRotation">
                  Rotation du temps de travail
                </label>
                <select class="form-control" v-model="form.workRotation" name="workRotation">
                  <option disabled value=" ">Choisir</option>
                  <option value="1">1 x 8h</option>
                  <option value="2">2 x 8h</option>
                  <option value="3">3 x 8h</option>
                </select>
              </div>

              <!-- Rate Quality section -->
              <div class="form-group col-md-6">
                <label for="rateQuality">
                  Taux de qualité (en %)
                </label>
                <input type="number" min="80" max="100" class="form-control" v-model="form.rateQuality" for="rateQuality" placeholder="Taux de qualité (en %)">
              </div>
            </div>

            <!-- Planned Downtime and WorkRotation -->
            <div class="form-row">
              <!-- Planned Downtine section -->
              <div class="form-group col-md-6">
                <label for="plannedDowntime">
                  Arrêts planifiés (jours/an)
                </label>
                <input type="number" min="0" class="form-control" v-model="form.plannedDowntime" for="plannedDowntime" placeholder="Arrêts planifiés (jours)">
              </div>

              <!-- Unplanned Downtime section -->
              <div class="form-group col-md-6">
                <label for="unplannedDowntime">
                  Arrêts non-planifiés (jours/an)
                </label>
                <input type="number" min="0" class="form-control" v-model="form.unplannedDowntime" for="unplannedDowntime" placeholder="Arrêts non-planifiés (jours)">
              </div>
            </div>

            <!-- Nominal Cadence  -->
            <div class="form-row">
              <!-- Nominal Cadence section -->
              <div class="form-group col-md-12">
                <label for="nominalCadence">
                  Cadence nominale de la ligne (unités/heure)
                </label>
                <div class="d-flex align-items-center">
                  <input type="range" min="0" max="50000" class="custom-range w-75" v-model="form.nominalCadence" name="nominalCadence">
                  <input type="number" class="ml-3" name="nominalCadence" v-model="form.nominalCadence">
                </div>
              </div>
            </div>

            <!-- Real Cadence  -->
            <div class="form-row">
              <!-- Real Cadence section -->
              <div class="form-group col-md-12">
                <label for="realCadence">
                  Cadence réelle de la ligne (unités/heure)
                </label>
                <div class="d-flex align-items-center">
                  <input type="range" min="0" max="50000" class="custom-range w-75" v-model="form.realCadence" name="realCadence">
                  <input type="number" class="ml-3" name="realCadence" v-model="form.realCadence">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-12 col-lg-6 d-none">


        <!-- Button update : si jamais le script (ce qui est très peu probable) -->
        <!-- ne s'execute pas, réexecution avec un bouton -->
        <!-- <div class="form-row d-none">
          <div class="form-group col-12 mb-0">
            <button class="btn btn-primary" @click="updateData()">
              Mettre à jour
            </button>
          </div>
        </div> -->

        <!-- Button PDF -->
        <!-- <div class="form-row">
          <div class="form-group col-12 mb-0">
            <a href="#pdf" class="btn btn-primary">
              Télécharger le PDF
            </a>
          </div>
        </div> -->
      </div>
    </div>

    <!-- Section with background image -->
    <div id="bg-simulation" class="bg-section container-fluid">
      <div class="row">
        <!-- Content -->
        <div class="container">
          <div class="row py-section">
            <!-- Responsive col -->
            <div class="col-10 mx-auto text-center">
              <!-- Text section -->
              <p class="text-white title-2 mb-0">
                Votre temps passé à créer de la valeur ajoutée est estimé à <b>{{ Around(AddedValue, 0) }}%</b>.
              </p>

              <!-- Link to the jobs page -->
              <!-- <a class="mx-auto btn btn-secondary" href="/contact.php">
                En savoir +
              </a> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container py-section">
      <div class="row pb-0">
        <!-- Section Title -->
        <h3 class="title-1 text-left mb-5 mx-auto d-none d-lg-block">
          <span class="underline underline-secondary">
            Estimation de votre situation
          </span>
        </h3>
        <table class="table my-4">

          <tbody>
            <tr>
			  <th scope="col" style="vertical-align: middle; text-align: center" colspan="2">Taux</th>
			  <!--<th scope="col" colspan="2" rowspan="2" style="vertical-align: middle; text-align: center">Valeur ajoutée</th>	-->
			  <th v-if="AddedValue" colspan="2" rowspan="4" style="vertical-align: middle; text-align: center"> Temps à valeur ajoutée <br> <br> {{ Around(AddedValue, 1) }} %</th>
              <th v-else colspan="2" rowspan="4" style="vertical-align: middle; text-align: center">Temps à valeur ajoutée <br><br> Inconnu</th>
		   </tr>

		   <tr>
		   <th scope="row">Disponibilité</th>
			  <td v-if="TauxDispo">{{ Around((TauxDispo), 1) }} %</td>
              <td v-else>Inconnu</td>
			</tr>
			<tr>
              <th scope="row">Performance</th>
			  <td v-if="TauxPerf">{{ Around((TauxPerf), 1) }} %</td>
              <td v-else>Inconnu</td>

			</tr>
			<tr>
              <th scope="row">Qualité</th>
			  <td v-if="TauxQuality"> {{ Around(TauxQuality, 1) }} %</td>
              <td v-else>Inconnu</td>
			</tr>
          </tbody>

        </table>

      </div>
      <div class="row align-items-center">
        <div class="col-12 col-md-10 col-lg-8 col-xl-6 mx-auto mx-xl-0">
          <reactive-stacked-bar-chart class="mx-auto" style="height: 500px;" :stack_bar_chart="stack_bar_chart"></reactive-stacked-bar-chart>
        </div>
        <div class="col-12 col-md-10 col-lg-8 col-xl-6 mx-auto mx-xl-0">
          <reactive-dual-line-chart class="mx-auto" style="height: 500px;" :dual_line_chart="dual_line_chart"></reactive-dual-line-chart>
        </div>
      </div>
    </div>

    <!-- Keep in touch section -->
    <div id="bg-pdf" class="container-fluid bg-section">
      <div class="row">
        <!-- Dual container to keep the content in the center and the background on all of the width page -->
        <div class="container">
          <div class="row py-section flex-column">
            <!-- Responsive col -->
            <div class="col-10 col-lg-12 mx-auto">
              <!-- Text content -->
              <p class="bg-section-text-footer text-center text-white mb-4">
                Envie de recevoir le compte rendu par mail ?
              </p>

              <div class="row">
                <form class="col-12 col-lg-8 mx-auto" action="simulation2.php" @submit="exportPdf()" method="post">
                  <!-- NbDayWork and WorkRotation -->
                  <div class="form-row align-items-center">
                    <!-- Number Day Worked section -->
                    <div class="form-group col-10 col-md-4 mb-lg-0">
                      <input type="email" class="form-control" name="anonymeEmail" v-model="anonyme_user.email" placeholder="Email *" required>
                    </div>

                    <!-- Work Rotation section -->
                    <div class="form-group col-10 col-md-4 mb-lg-0">
                      <input type="text" class="form-control" name="anonymeCompany" v-model="anonyme_user.company" placeholder="Entreprise">
                    </div>

                    <!-- Button submit -->
                    <div class="form-group col-10 col-md-6 col-lg-4 mb-lg-0">
                      <button class="btn btn-secondary text-white w-100" type="submit">
                        Recevoir le PDF
                      </button>
                    </div>
                  </div>
                  <span class="legend-text text-white">* Les données collectées servent à la génération de votre pdf.</span>
                </form>
              </div>			  			  <div class="col-10 col-lg-8 mx-auto text-center">			  			  <p class="bg-section-text-footer text-center text-white mb-4">                <br><br>Des explications ? Une analyse plus détaillée ?              </p>			  			  <a class="mx-auto btn btn-secondary" href="contact.php">                Contactez-nous              </a>			  			  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Keep in touch section -->
  </main>
  <!-- End Main -->

  <script type="text/javascript">
    var doc = new jsPDF();
    var formData = new FormData();

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

            Plotly.toImage(this.$refs[this.stack_bar_chart.uuid], {format: 'jpeg', width: 600, height: 600}).then(function(dataUrl) {
              formData.append('stack_bar_chart', dataUrl);
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

            Plotly.toImage(this.$refs[this.dual_line_chart.uuid], {format: 'jpeg', width: 600, height: 600}).then(function(dataUrl) {
              formData.append('dual_line_chart', dataUrl);
            })
          },
          deep: true
        }
      }
    });

    const simulation = new Vue({
      el: '#simulation',
      data: {
        form: {
          nbDayWork: null,
          workRotation: " ", //not null because makes select bug
          rateQuality: null,
          plannedDowntime: null,
          unplannedDowntime: null,
          nominalCadence: 8000,
          realCadence: 5000
        },
        anonyme_user: {
          email: null,
          company: null
        },
        stack_bar_chart: {
          uuid: "123",
          traces: [{
              y: [],
              name: '% Valeur Ajoutée',
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
                color: 'rgba(41, 183, 116, 1)',
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
                color: 'rgba(187, 210, 225, 1))',
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
                color: 'rgba(8, 41, 71, 1))',
                width: 1
              }
            }
          ],
          layout: {
            title: '<b>Découpage de votre activité</b>',
            titlefont: {
              color: 'rgba(8, 41, 71, 1)',
              size: 20
            },
            showlegend: true,
			legend: {
				x: 1,
				y: 0.3
			},
            barmode: 'stack',
            yaxis: {
              fixedrange: true
            },
            xaxis: {
              fixedrange: true,
			  showticklabels: false,
            }
          },
          config: {
            displayModeBar: false,
            responsive: true
          }
        },
        dual_line_chart: {
          uuid: "124",
          traces: [
          {
            x: [],
            y: [],
            mode: 'lines+markers',
            name: 'réduction de 20% des pertes',
            type: 'scatter',						text: '€ économisés',
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
            type: 'scatter',						text: '€ économisés',
            line: {
              dash: 'dashdot',
              color: 'rgba(41, 183, 116, 1)',
              width: 2
            }
          }
          ],
          layout: {
            title: '<b>Gains estimés en diminuant vos pertes </b>',
            titlefont: {
              color: 'rgba(8, 41, 71, 1)',
              size: 20
            },
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
                size: 16
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

          // console.log("Exec.");
        },
        Generate_TRS_chart() {
          var nbTraces = this.stack_bar_chart.traces.length;

          var ChartValues = [
            this.AddedValue,
            this.PerteArrets,
            this.PertePerfs,
            this.PerteQuality
          ];

          var AroundNumber = 1;

          for (var i = 0; i < nbTraces; i++) {
            this.stack_bar_chart.traces[i].y.pop();
            this.stack_bar_chart.traces[i].y.push(this.Around(ChartValues[i], AroundNumber));
          }

          // console.log(this.stack_bar_chart.traces[0].y);
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
        Around(x, n) {
          return Number.parseFloat(x).toFixed(n);
        },
        getFirstPart(str) {
            return str.split('@')[0];
        },
        Economie(x, y) {
          if (!this.TauxRendement) {
            return 0;
          }
          else {
            return ((y / 100) * this.TauxRendement * x);
          }
        },
        exportPdf() {
          // Default export is a4 paper, portrait, using milimeters for units
          // Default value (210, 297)

          // var hauteur = 297;
          // var largeur = 210;
          // var interval = 5;
          // var array = {x: [], y: []};
          // var c = 0;
          //
          // doc.setFontSize(5);
          //
          // for (var i = 0; i < largeur; i = i + interval) {
          //   // doc.line(i, 0, i, hauteur, 'F');
          //   array.x.push("0:"+i);
          //   doc.text(array.x[c], i, 3);
          //   c++;
          // }
          //
          // c = 0;
          //
          // for (var i = 0; i < hauteur; i = i + interval) {
          //   // doc.line(0, i, largeur, i, 'F');
          //   array.y.push("0:"+i);
          //   doc.text(array.y[c], 1, i);
          //   c++;
          // }
          //
          // doc.setFontSize(14);
          // doc.text("Le temps que vous avez passé à créer de la valeur ajoutée est de : "+this.Around(this.AddedValue, 0), 10, 10);

          // doc.save(this.getFirstPart(this.anonyme_user.email) + '.pdf');

          // var pdf = doc.output('datauristring');

          // pdf.save(this.getFirstPart(this.anonyme_user.email) + '.pdf');

          var request = new XMLHttpRequest();
          // POST to httpbin which returns the POST data as JSON
          request.open('POST', 'templ_pdf_mj.php', /* async = */ false);

          formData.append('anonyme_user_first_part_email', this.getFirstPart(this.anonyme_user.email));
          formData.append('anonyme_user_email', this.anonyme_user.email);
          formData.append('anonyme_user_company', this.anonyme_user.company);

          formData.append('nbDayWork', this.form.nbDayWork);
          formData.append('workRotation', this.form.workRotation);
          formData.append('rateQuality', this.form.rateQuality);
          formData.append('plannedDowntime', this.form.plannedDowntime);
          formData.append('unplannedDowntime', this.form.unplannedDowntime);
          formData.append('nominalCadence', this.form.nominalCadence);
          formData.append('realCadence', this.form.realCadence);

          formData.append('TauxDispo', this.Around(this.TauxDispo, 1));
          formData.append('TauxPerf', this.Around(this.TauxPerf, 1));
          formData.append('TauxQuality', this.Around(this.TauxQuality, 1));
          formData.append('AddedValue', this.Around(this.AddedValue, 1));

          request.send(formData);
          //console.log(request.response);
        }
      },
      computed: {
        TauxOuverture() {
          return (this.form.nbDayWork * (this.form.workRotation * 8));
        },
        TauxRendement() {
          return (this.TauxOuverture - (this.form.plannedDowntime * (this.form.workRotation * 8)));
        },
        TauxFonct() {
          return (this.TauxRendement - (this.form.unplannedDowntime * (this.form.workRotation * 8)));
        },
        TauxNominal() {
          return (this.TauxFonct * (this.form.realCadence / this.form.nominalCadence));
        },
        TauxUtile() {
          return (this.TauxNominal * (this.TauxQuality * 1));
        },
        TauxDispo() {
          return ((this.TauxFonct / this.TauxRendement) * 100);
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
          return (((this.form.unplannedDowntime * this.form.workRotation) / this.TauxRendement) * 100);
        },
        PertePerfs() {
          return (((this.TauxFonct * (1 - (this.form.realCadence / this.form.nominalCadence))) / this.TauxRendement) * 100);
        },
        PerteQuality() {
          return (((this.TauxNominal * (1 - (this.TauxQuality * 0.01))) / this.TauxRendement) * 100);
        },
    		PerteInexpl() {
    		  return (100 - this.PerteArrets - this.PertePerfs - this.PerteQuality - this.AddedValue);
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
  </script>

  <?php include 'footer.htm'; ?>

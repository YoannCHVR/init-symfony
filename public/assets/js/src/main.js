// Shared_data : movie
window.shared_data = {
  id: 0,
  chart: {
    uuid: "123",
    traces: [
      {
        x: [''],
        y: ['60'],
        name: '% VA',
        orientation: 'v',
        marker: {
          color: 'rgba(8,41,71,0.6)',
          width: 1
        },
        type: 'bar'
      },
      {
        x: [''],
        y: ['20'],
        name: '% Pa',
        orientation: 'v',
        type: 'bar',
        marker: {
          color: 'rgba(55,128,191,0.6)',
          width: 1
        }
      },
      {
        x: [''],
        y: ['10'],
        name: '% Pp',
        orientation: 'v',
        type: 'bar',
        marker: {
          color: 'rgba(41,183,116,0.6)',
          width: 1
        }
      },
      {
        x: [''],
        y: ['10'],
        name: '% Pq',
        orientation: 'v',
        type: 'bar',
        marker: {
          color: 'rgba(187,210,225,0.6))',
          width: 1
        }
      }
    ]
  },
  layout: {
    title: 'Valeurs ajoutée vs Pertes',
    showlegend: true,
    barmode: 'stack',
    paper_bgcolor: 'rgba(0,0,0,0)',
    plot_bgcolor: 'rgba(0,0,0,0)'
  }
}

export const params = {
  tool: {
    default: 'dedukti'
  },
  extension: {
    display: 'Extention',
    type: 'radio',
    buttons: [
      {
        name: 'dk',
        display: 'dk'
      },
      {
        name: 'lp',
        display: 'lp'
      }
    ],
    default: 'dk'
  },
  filebody: {
    display: 'filebody',
    type: 'textarea',
    rows: 19,
    default: ''
  }
}

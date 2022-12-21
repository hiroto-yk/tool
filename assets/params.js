export const params = {
  tool: {
    default: 'dedukti'
  },
  file: {
    display: 'File',
    type: 'file',
    target: 'filebody',
    default: [],
    size: 'whole'
  },
  extension: {
    display: 'Lambdapi Extention',
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

import talks from './talks/routes'
import speakers from './speakers/routes'
import sponsors from './sponsors/routes'
import organisers from './organisers/routes'

export default [...talks, ...speakers, ...sponsors, ...organisers]

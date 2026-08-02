import DashboardController from './DashboardController'
import PortfolioController from './PortfolioController'

const Guru = {
    DashboardController: Object.assign(DashboardController, DashboardController),
    PortfolioController: Object.assign(PortfolioController, PortfolioController),
}

export default Guru
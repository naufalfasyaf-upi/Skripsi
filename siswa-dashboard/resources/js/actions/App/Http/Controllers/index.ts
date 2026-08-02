import AuthController from './AuthController'
import DashboardController from './DashboardController'
import PortfolioController from './PortfolioController'
import AnalisisController from './AnalisisController'
import Guru from './Guru'
import Admin from './Admin'
import Settings from './Settings'
import Teams from './Teams'

const Controllers = {
    AuthController: Object.assign(AuthController, AuthController),
    DashboardController: Object.assign(DashboardController, DashboardController),
    PortfolioController: Object.assign(PortfolioController, PortfolioController),
    AnalisisController: Object.assign(AnalisisController, AnalisisController),
    Guru: Object.assign(Guru, Guru),
    Admin: Object.assign(Admin, Admin),
    Settings: Object.assign(Settings, Settings),
    Teams: Object.assign(Teams, Teams),
}

export default Controllers
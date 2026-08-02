import AdminDashboardController from './AdminDashboardController'
import StudentController from './StudentController'
import TeacherController from './TeacherController'
import KelasController from './KelasController'
import MapelController from './MapelController'

const Admin = {
    AdminDashboardController: Object.assign(AdminDashboardController, AdminDashboardController),
    StudentController: Object.assign(StudentController, StudentController),
    TeacherController: Object.assign(TeacherController, TeacherController),
    KelasController: Object.assign(KelasController, KelasController),
    MapelController: Object.assign(MapelController, MapelController),
}

export default Admin
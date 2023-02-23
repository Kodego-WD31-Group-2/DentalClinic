<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dashboardOverview1()
    {
        $currentYear = now()->year;

        // Month to Date TA(Total Appointment)
        $appointmentsThisMonth = Appointment::whereYear('appointment_date', now()->year)
            ->whereMonth('appointment_date', now()->month)
            ->count();

        // Previous Month TA
        $previousYear = now()->subMonth()->year;
        $previousMonth = now()->subMonth()->month;

        $appointmentsPreviousMonth = Appointment::whereYear('appointment_date', $previousYear)
            ->whereMonth('appointment_date', $previousMonth)
            ->count();

        // Year-to-date TA
        $appointmentsYTD = Appointment::whereYear('appointment_date', $currentYear)
            ->whereDate('appointment_date', '>=', now()->startOfYear())
            ->whereDate('appointment_date', '<=', now())
            ->count();
        


        return view('pages/dashboard-overview-1', [
            // Specify the base layout.
            // Eg: 'side-menu', 'simple-menu', 'top-menu', 'login'
            // The default value is 'side-menu'
            'appointmentsThisMonth' => $appointmentsThisMonth,
            'appointmentsPreviousMonth' => $appointmentsPreviousMonth,
            'appointmentsYTD' => $appointmentsYTD,
            'layout' => 'side-menu'
        ]);
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dashboardOverview2()
    {
        //Today's Appointment
        $appointmentsToday = Appointment::whereDate('appointment_date', today())->count();
        $appointmentsPendingToday = Appointment::whereDate('appointment_date', today())->where('status', 'pending')->count();
        $appointmentsCompletedToday = Appointment::whereDate('appointment_date', today())->where('status', 'completed')->count();
        $appointmentsCancelledToday = Appointment::whereDate('appointment_date', today())->where('status', 'cancelled')->count();

        //All Appointment
        $totalAppointments = Appointment::count();
        $appointmentsPending = Appointment::where('status', 'pending')->count();
        $appointmentsCompleted = Appointment::where('status', 'completed')->count();
        $appointmentsCancelled = Appointment::where('status', 'cancelled')->count();

        // Appointment by Doctors
        $appointmentsByDoctor = DB::table('doctors')
            ->select('doctors.first_name', 'doctors.last_name', 'doctors.specialty', 'doctors.doctor_id', DB::raw('COUNT(appointments.doctor_id) as total_appointments'))
            ->leftJoin('appointments', 'doctors.doctor_id', '=', 'appointments.doctor_id')
            ->groupBy('doctors.doctor_id', 'doctors.first_name', 'doctors.last_name', 'doctors.specialty')
            ->get();

        
        // $appointmentsByDoctor = DB::table('doctors')
        //     ->select('doctors.doctor_id', 'doctors.first_name', 'doctors.last_name', 'doctors.specialty', DB::raw('COUNT(appointments.doctor_id) as total_appointments'))
        //     ->leftJoin('appointments', 'doctors.doctor_id', '=', 'appointments.doctor_id')
        //     ->groupBy('doctors.doctor_id', 'doctors.first_name', 'doctors.last_name', 'doctors.specialty')
        //     ->get();



        //List of Patients for Today
        $appointmentsTodayList = Appointment::whereDate('appointment_date', today())
        ->select('appointments.first_name', 'appointments.last_name', 'appointments.appointment_type', 'appointments.status', 'doctors.first_name AS doctor_first_name', 'doctors.last_name AS doctor_last_name')
        ->join('doctors', 'appointments.doctor_id', '=', 'doctors.doctor_id')
        ->get();
        $doctors = Doctor::all();

        // Gender
        $maleCount = Patient::where('gender', 'male')->count();
        $femaleCount = Patient::where('gender', 'female')->count();
        $total = $maleCount + $femaleCount;
        $malePercentage = $total > 0 ? round($maleCount / $total * 100, 2) : 0;
        $femalePercentage = $total > 0 ? round($femaleCount / $total * 100, 2) : 0;

        //Service Type
        $regularCheckup = Appointment::where('appointment_type', 'Regular Checkup')->count();
        $emergency = Appointment::where('appointment_type', 'Emergency')->count();
        $cleaning = Appointment::where('appointment_type', 'Cleaning')->count();
        $regularCheckupPercentage = $total > 0 ? round($regularCheckup / $totalAppointments * 100, 2) : 0;
        $emergencyPercentage = $total > 0 ? round($emergency / $totalAppointments * 100, 2) : 0;
        $cleaningPercentage = $total > 0 ? round($cleaning / $totalAppointments * 100, 2) : 0;

        //Appointment Chart
        $completedPercentage = $total > 0 ? round($appointmentsCompleted / $totalAppointments * 100, 2) : 0;
        $pendingPercentage = $total > 0 ? round($appointmentsPending / $totalAppointments * 100, 2) : 0;
        $cancelledPercentage = $total > 0 ? round($appointmentsCancelled / $totalAppointments * 100, 2) : 0;

        return view('pages/dashboard-overview-2', [
            'appointmentsToday' => $appointmentsToday,
            'appointmentsPendingToday' => $appointmentsPendingToday,
            'appointmentsCompletedToday' => $appointmentsCompletedToday,
            'appointmentsCancelledToday' => $appointmentsCancelledToday,
            'totalAppointments' => $totalAppointments,
            'appointmentsPending' => $appointmentsPending,
            'appointmentsCompleted' => $appointmentsCompleted,
            'appointmentsCancelled' => $appointmentsCancelled,
            'appointmentsTodayList' => $appointmentsTodayList,
            'appointmentsByDoctor' => $appointmentsByDoctor,
            'regularCheckup' => $regularCheckup,
            'emergency' => $emergency,
            'cleaning' => $cleaning,
            'regularCheckupPercentage' => $regularCheckupPercentage,
            'emergencyPercentage' => $emergencyPercentage,
            'cleaningPercentage' => $cleaningPercentage,
            'completedPercentage' => $completedPercentage,
            'pendingPercentage' => $pendingPercentage,
            'cancelledPercentage' => $cancelledPercentage,
            'doctors' => $doctors,
            'layout' => 'side-menu'
        ]);
    }


    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dashboardOverview3()
    {
        return view('pages/dashboard-overview-3');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dashboardOverview4()
    {
        //Gender
        $maleCount = Patient::where('gender', 'male')->count();
        $femaleCount = Patient::where('gender', 'female')->count();
        $total = $maleCount + $femaleCount;
        $malePercentage = $total > 0 ? round($maleCount / $total * 100, 2) : 0;
        $femalePercentage = $total > 0 ? round($femaleCount / $total * 100, 2) : 0;


        // Age Sorter
        $minorCount = Patient::whereRaw("DATE_ADD(date_of_birth, INTERVAL 18 YEAR) > CURDATE()")->count();
        $adultCount = Patient::whereRaw("DATE_ADD(date_of_birth, INTERVAL 18 YEAR) <= CURDATE()")->count();
        $seniorCount = Patient::whereRaw("DATE_ADD(date_of_birth, INTERVAL 60 YEAR) <= CURDATE()")->count();
        $total = $minorCount + $adultCount + $seniorCount;
        $minorPercentage = $total > 0 ? round($minorCount / $total * 100, 2) : 0;
        $adultPercentage = $total > 0 ? round($adultCount / $total * 100, 2) : 0;
        $seniorPercentage = $total > 0 ? round($seniorCount / $total * 100, 2) : 0;

        $currentYear = date('Y');
        $patients = Patient::all();
        $ageGroups = [
            'below18' => ['count' => 0, 'percentage' => 0],
            '18to30' => ['count' => 0, 'percentage' => 0],
            '31to45' => ['count' => 0, 'percentage' => 0],
            'above45' => ['count' => 0, 'percentage' => 0],
            'senior' => ['count' => 0, 'percentage' => 0],
        ];
        foreach ($patients as $patient) {
            $age = $currentYear - date('Y', strtotime($patient->date_of_birth));
            if ($age < 18) {
                $ageGroups['below18']['count']++;
            } elseif ($age >= 18 && $age <= 30) {
                $ageGroups['18to30']['count']++;
            } elseif ($age > 30 && $age <= 45) {
                $ageGroups['31to45']['count']++;
            } elseif ($age > 45 && $age <= 60) {
                $ageGroups['above45']['count']++;
            } else {
                $ageGroups['senior']['count']++;
            }
        }
        $total = count($patients);
        foreach ($ageGroups as $key => $group) {
            $ageGroups[$key]['percentage'] = $total > 0 ? round($group['count'] / $total * 100, 2) : 0;
        }

        
        return view('pages/dashboard-overview-4', [
            'maleCount' => $maleCount,
            'femaleCount' => $femaleCount,
            'malePercentage' => $malePercentage,
            'femalePercentage' => $femalePercentage,
            'minorCount' => $minorCount,
            'adultCount' => $adultCount,
            'seniorCount' => $seniorCount,
            'minorPercentage' => $minorPercentage,
            'adultPercentage' => $adultPercentage,
            'seniorPercentage' => $seniorPercentage,
            'ageGroups' => $ageGroups,
        ]);
            
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function inbox()
    {
        return view('pages/inbox');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function categories()
    {
        return view('pages/categories');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addProduct()
    {
        return view('pages/add-product');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function productList()
    {
        return view('pages/product-list');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function productGrid()
    {
        return view('pages/product-grid');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function transactionList()
    {
        return view('pages/transaction-list');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function transactionDetail()
    {
        return view('pages/transaction-detail');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sellerList()
    {
        return view('pages/seller-list');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sellerDetail()
    {
        return view('pages/seller-detail');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function reviews()
    {
        return view('pages/reviews');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function fileManager()
    {
        return view('pages/file-manager');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pointOfSale()
    {
        return view('pages/point-of-sale');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function chat()
    {
        $chats = Chat::all();
        return view('pages/chat', compact('chats'));

    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function post()
    {
        return view('pages/post');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function calendar()
    {
        return view('pages/calendar');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crudDataList()
    {
        return view('pages/crud-data-list');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crudForm()
    {
        return view('pages/crud-form');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function usersLayout1()
    {
        return view('pages/users-layout-1');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function usersLayout2()
    {
        return view('pages/users-layout-2');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function usersLayout3()
    {
        return view('pages/users-layout-3');
    }

    /**
 * Show specified view.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function profileOverview1()
{
    // Retrieve the currently logged in user
    $user = Auth::user();
    
    // Retrieve the patients connected to the user
    $patients = Patient::where('user_id', $user->id)->get();
    $appointments = Appointment::where('user_id', $user->id)->get();
    
    // Retrieve the pending appointments for the user
    $pendingAppointments = Appointment::where('user_id', $user->id)
        ->where('status', 'pending')
        ->get();
    
    // Retrieve the completed and cancelled appointments connected to the user
    $previousAppointments = Appointment::where('user_id', $user->id)
        ->whereIn('status', ['completed', 'cancelled'])
        ->orderBy('appointment_date', 'desc')
        ->get();
    
    // Pass the data to the view
    return view('pages/profile-overview-1', [
        'patients' => $patients,
        'appointments' => $appointments,
        'pendingAppointments' => $pendingAppointments,
        'previousAppointments' => $previousAppointments,
    ]);
}

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function profileOverview2()
    {
        return view('pages/profile-overview-2');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function profileOverview3()
    {
        return view('pages/profile-overview-3');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function wizardLayout1()
    {
        return view('pages/wizard-layout-1');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function wizardLayout2()
    {
        return view('pages/wizard-layout-2');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function wizardLayout3()
    {
        return view('pages/wizard-layout-3');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function blogLayout1()
    {
        return view('pages/blog-layout-1');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function blogLayout2()
    {
        return view('pages/blog-layout-2');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function blogLayout3()
    {
        return view('pages/blog-layout-3');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pricingLayout1()
    {
        return view('pages/pricing-layout-1');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pricingLayout2()
    {
        return view('pages/pricing-layout-2');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function invoiceLayout1()
    {
        return view('pages/invoice-layout-1');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function invoiceLayout2()
    {
        return view('pages/invoice-layout-2');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function faqLayout1()
    {
        return view('pages/faq-layout-1');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function faqLayout2()
    {
        return view('pages/faq-layout-2');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function faqLayout3()
    {
        return view('pages/faq-layout-3');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('pages/login');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('pages/register');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function errorPage()
    {
        return view('pages/error-page');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateProfile()
    {
        $user = User::all();

    // Retrieve the currently authenticated user and pass their user model to the view
    $user = Auth::user();

    return view('pages.update-profile', [
        'users' => $user,
        'loggedInUser' => $user,
    ]);

    // Check if the user has a profile photo and set the image URL accordingly
    $image = $user->profile_photo_path ? asset('storage/'.$user->profile_photo_path) : asset('assets/img/user-2-svgrepo-com.svg');

    return view('pages.update-profile', [
        'user' => $user,
        'image' => $image,
    ]);
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changePassword()
    {
        return view('pages/change-password');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function regularTable()
    {
        return view('pages/regular-table');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tabulator()
    {
        return view('pages/tabulator');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function modal()
    {
        return view('pages/modal');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function slideOver()
    {
        return view('pages/slide-over');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function notification()
    {
        return view('pages/notification');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tab()
    {
        return view('pages/tab');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function accordion()
    {
        return view('pages/accordion');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function button()
    {
        return view('pages/button');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function alert()
    {
        return view('pages/alert');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function progressBar()
    {
        return view('pages/progress-bar');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tooltip()
    {
        return view('pages/tooltip');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dropdown()
    {
        return view('pages/dropdown');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function typography()
    {
        return view('pages/typography');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function icon()
    {
        return view('pages/icon');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loadingIcon()
    {
        return view('pages/loading-icon');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function regularForm()
    {
        return view('pages/regular-form');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function datepicker()
    {
        return view('pages/datepicker');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tomSelect()
    {
        return view('pages/tom-select');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function fileUpload()
    {
        return view('pages/file-upload');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function wysiwygEditorClassic()
    {
        return view('pages/wysiwyg-editor-classic');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function wysiwygEditorInline()
    {
        return view('pages/wysiwyg-editor-inline');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function wysiwygEditorBalloon()
    {
        return view('pages/wysiwyg-editor-balloon');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function wysiwygEditorBalloonBlock()
    {
        return view('pages/wysiwyg-editor-balloon-block');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function wysiwygEditorDocument()
    {
        return view('pages/wysiwyg-editor-document');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function validation()
    {
        return view('pages/validation');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function chart()
    {
        return view('pages/chart');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function slider()
    {
        return view('pages/slider');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function imageZoom()
    {
        return view('pages/image-zoom');
    }

    // /**
    //  * Show specified view.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function home()
    // {
    //     return view('pages/home');
    // }
}

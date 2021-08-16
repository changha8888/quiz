<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\CreateSemesterRequest;
use App\Http\Requests\UpdateSemesterRequest;
use App\Repositories\SemesterRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Exports\SemesterExport;
use Maatwebsite\Excel\Facades\Excel;
use Dompdf\Dompdf;

class SemesterController extends AppBaseController
{
    /** @var  SemesterRepository */
    private $semesterRepository;

    public function __construct(SemesterRepository $semesterRepo)
    {
        $this->semesterRepository = $semesterRepo;
    }

    /**
     * Display a listing of the Semester.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $semesters = $this->semesterRepository->all();

        return view('backend.semesters.index')
            ->with('semesters', $semesters);
    }

    /**
     * Show the form for creating a new Semester.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.semesters.create');
    }

    /**
     * Store a newly created Semester in storage.
     *
     * @param CreateSemesterRequest $request
     *
     * @return Response
     */
    public function store(CreateSemesterRequest $request)
    {
        $input = $request->all();

        $semester = $this->semesterRepository->create($input);


        return redirect(route('admin.semester.index'))->withFlashSuccess(__('Thêm mới học kỳ thành công. '));
    }

    /**
     * Display the specified Semester.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $semester = $this->semesterRepository->find($id);

        if (empty($semester)) {
            Flash::error('Semester not found');

            return redirect(route('semester.index'));
        }

        return view('semesters.show')->with('semester', $semester);
    }

    /**
     * Show the form for editing the specified Semester.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $semester = $this->semesterRepository->find($id);

        if (empty($semester)) {
            Flash::error('Semester not found');

            return redirect(route('admin.semester.index'));
        }

        return view('backend.semesters.edit')->with('semester', $semester);
    }

    /**
     * Update the specified Semester in storage.
     *
     * @param int $id
     * @param UpdateSemesterRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSemesterRequest $request)
    {
        $semester = $this->semesterRepository->find($id);

        if (empty($semester)) {
            Flash::error('Semester not found');

            return redirect(route('admin.semesters.index'));
        }

        $semester = $this->semesterRepository->update($request->all(), $id);

        Flash::success('Semester updated successfully.');

        return redirect(route('admin.semester.index'))->withFlashSuccess(__('Sửa học kỳ thành công. '));
    }

    /**
     * Remove the specified Semester from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $semester = $this->semesterRepository->find($id);

        if (empty($semester)) {
            Flash::error('Semester not found');

            return redirect(route('admin.semester.index'));
        }

        $this->semesterRepository->delete($id);


        return redirect(route('admin.semester.index'))->withFlashSuccess(__('Xóa học kỳ thành công. '));
    }

    public function export() 
    {
        return Excel::download(new SemesterExport, 'hoc_ky.xlsx');
    }
    public function exportPDF() 
    {
        return Excel::download(new SemesterExport, 'hoc_ky.pdf');
        // return (new SemesterExport)->download('invoices.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }
}

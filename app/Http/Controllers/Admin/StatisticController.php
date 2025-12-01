<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Statistic;

class StatisticController extends Controller
{
    public function index() {
        $statistics = Statistic::orderBy('order')->get();
        return view('admin.statistics.index', compact('statistics'));
    }

    public function create() {
        return view('admin.statistics.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'value' => 'required|integer|min:0|max:100',
            'order' => 'nullable|integer',
        ]);

        Statistic::create($request->all());
        return redirect()->route('admin.statistics.index')->with('success', 'Statistic created successfully');
    }

    public function edit($id)
    {
        // تجيب الإحصائية حسب الـ id
        $statistic = Statistic::findOrFail($id);

        // تبعثه للـ view
        return view('admin.statistics.edit', compact('statistic'));
    }


    public function update(Request $request, $id) {
        $stat = Statistic::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'value' => 'required|integer|min:0|max:100',
            'order' => 'nullable|integer',
        ]);

        $stat->update($request->all());
        return redirect()->route('admin.statistics.index')->with('success', 'Statistic updated successfully');
    }

    public function destroy($id) {
        $stat = Statistic::findOrFail($id);
        $stat->delete();
        return redirect()->route('admin.statistics.index')->with('success', 'Statistic deleted successfully');
    }
}


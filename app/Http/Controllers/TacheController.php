<?php
namespace App\Http\Controllers;

use App\Models\Etat;
use App\Models\Tache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TacheController extends Controller
{
    public function index()
    {
        $taches = Tache::all();
        return view('taches.index', compact('taches'));
    }

    public function create()
    {
        $etats = Etat::all();
        return view('taches.create', compact('etats'));
    }


    public function store(Request $request)
    {
        // Valider et enregistrer la nouvelle tâche
        $request->validate([
            'description' => 'required',
            'datecreation' => 'required',
            'dateRealisationFinal' => 'required',
            'etat_id' => 'required',
        ]);

        // Assigner l'ID de l'utilisateur authentifié
        $request['user_id'] = Auth::id();

        Tache::create($request->all());

        return redirect()->route('taches.index')->with('success', 'Tâche créée avec succès.');
    }



    public function update(Request $request, Tache $tache)
    {
        // Valider et mettre à jour la tâche
        $request->validate([
            'description' => 'required',
            'datecreation' => 'required',
            'dateRealisationFinal' => 'required',
            'etat_id' => 'required',
        ]);

        // Assurez-vous que l'utilisateur authentifié est celui qui a créé la tâche
        if ($tache->user_id == Auth::id()) {
            $tache->update($request->all());
            return redirect()->route('taches.index')->with('success', 'Tâche mise à jour avec succès.');
        } else {
            // Gérer l'erreur si l'utilisateur n'est pas autorisé à mettre à jour cette tâche
            return redirect()->route('taches.index')->with('error', 'Vous n\'êtes pas autorisé à mettre à jour cette tâche.');
        }
    }



    public function show(Tache $tache)
    {
        // Afficher les détails d'une tâche spécifique
        return view('taches.show', compact('tache'));
    }

    public function edit(Tache $tache)
    {
        // Afficher le formulaire d'édition
        return view('taches.edit', compact('tache'));
    }



    public function destroy(Tache $tache)
    {
        // Supprimer une tâche
        $tache->delete();

        return redirect()->route('taches.index')->with('success', 'Tâche supprimée avec succès.');
    }
}

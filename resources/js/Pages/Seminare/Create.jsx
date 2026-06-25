import { useState } from 'react';
import { router } from '@inertiajs/react';
import Nav from '../../Components/Nav';

export default function Create() {
    // React State für das Formular
    const [form, setForm] = useState({
        title: '',
        description: '',
        date: '',
        time: '',
        location: '',
        max_participants: 20,
    });

    // Wird bei jeder Eingabe ausgeführt
    function handleChange(event) {
        setForm({
            ...form,
            [event.target.name]: event.target.value,
        });
    }

    // Formular abschicken
    function handleSubmit(event) {
        event.preventDefault();

        router.post('/seminare', form);
    }

    return (
        <>
            <Nav />

            <main className="p-8 max-w-2xl mx-auto">
                <h1 className="text-3xl font-bold mb-6">Neues Seminar eintragen</h1>

                <form onSubmit={handleSubmit} className="card p-6 grid gap-4">
                    <input
                        name="title"
                        className="input input-bordered w-full"
                        placeholder="Titel"
                        value={form.title}
                        onChange={handleChange}
                    />

                    <textarea
                        name="description"
                        className="textarea textarea-bordered w-full"
                        placeholder="Beschreibung"
                        value={form.description}
                        onChange={handleChange}
                    />

                    <input
                        type="date"
                        name="date"
                        className="input input-bordered w-full"
                        value={form.date}
                        onChange={handleChange}
                    />

                    <input
                        type="time"
                        name="time"
                        className="input input-bordered w-full"
                        value={form.time}
                        onChange={handleChange}
                    />

                    <input
                        name="location"
                        className="input input-bordered w-full"
                        placeholder="Ort"
                        value={form.location}
                        onChange={handleChange}
                    />

                    <input
                        type="number"
                        name="max_participants"
                        className="input input-bordered w-full"
                        placeholder="Max. Teilnehmer"
                        value={form.max_participants}
                        onChange={handleChange}
                    />

                    <button className="btn btn-primary">
                        Seminar speichern
                    </button>
                </form>
            </main>
        </>
    );
}

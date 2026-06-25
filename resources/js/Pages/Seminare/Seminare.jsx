import { useState } from 'react';
import Nav from '../../Components/Nav';

export default function Seminare({ seminars = [] }) {
    // React State für die Live-Suche
    const [search, setSearch] = useState('');

    // Seminare live filtern
    const filteredSeminars = seminars.filter((seminar) =>
        seminar.title.toLowerCase().includes(search.toLowerCase()) ||
        seminar.location?.toLowerCase().includes(search.toLowerCase())
    );

    return (
        <>
            <Nav />

            <main className="p-8 max-w-5xl mx-auto">
                <div className="flex justify-between items-center mb-6">
                    <div>
                        <h1 className="text-3xl font-bold">Seminarübersicht</h1>
                        <p className="opacity-70">Alle verfügbaren Seminare.</p>
                    </div>

                    <a href="/seminare/create" className="btn btn-primary">
                        Neues Seminar
                    </a>
                </div>

                <input
                    type="text"
                    className="input input-bordered w-full mb-6"
                    placeholder="Seminar suchen..."
                    value={search}
                    onChange={(event) => setSearch(event.target.value)}
                />

                <div className="grid gap-4">
                    {filteredSeminars.length === 0 ? (
                        <p>Keine Seminare gefunden.</p>
                    ) : (
                        filteredSeminars.map((seminar) => (
                            <div key={seminar.id} className="card p-5">
                                <h2 className="text-xl font-bold">{seminar.title}</h2>
                                <p className="mt-2">{seminar.description}</p>
                                <p className="mt-3 font-semibold">
                                    📅 {seminar.date} {seminar.time}
                                </p>
                                <p>📍 {seminar.location}</p>
                                <p>👥 Max. {seminar.max_participants} Teilnehmer</p>
                            </div>
                        ))
                    )}
                </div>
            </main>
        </>
    );
}

import Nav from '../Components/Nav';
import mascot from '../Pictures/semiFlow_mascot.png';

export default function Dashboard({ upcomingSeminars = [] }) {
    return (
        <>
            <Nav />

            <main className="p-10 text-center">
                <img
                    src={mascot}
                    alt="SemiFlow Mascot"
                    className="w-64 mx-auto mb-2 drop-shadow-2xl"
                />

                <h1 className="text-3xl font-bold">
                    Willkommen bei SemiFlow 🍓✨
                </h1>

                <p className="mt-4">
                    Hier entsteht eure Seminarverwaltung.
                </p>

                <section className="mt-10 max-w-3xl mx-auto text-left">
                    <h2 className="text-2xl font-bold mb-4">
                        Nächste Seminare
                    </h2>

                    {upcomingSeminars.length === 0 ? (
                        <p className="opacity-70">Noch keine Seminare vorhanden.</p>
                    ) : (
                        <div className="grid gap-4">
                            {upcomingSeminars.map((seminar) => (
                                <div key={seminar.id} className="card p-5">
                                    <h3 className="font-bold text-xl">{seminar.title}</h3>
                                    <p>{seminar.date} {seminar.time}</p>
                                    <p>{seminar.location}</p>
                                </div>
                            ))}
                        </div>
                    )}
                </section>
            </main>
        </>
    );
}

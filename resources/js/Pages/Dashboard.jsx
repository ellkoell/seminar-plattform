import Nav from '../Components/Nav';
import mascot from '../Pictures/semiFlow_mascot.png';

export default function Dashboard() {
    return (
        <>
            <Nav />

            <main className="p-10 text-center">

                {/* Mascot über der Überschrift */}
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

            </main>
        </>
    );
}

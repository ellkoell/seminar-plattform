import Nav from '../Components/Nav';

export default function Dashboard() {
    return (
        <>
            <Nav />

            <main className="p-10">
                <h1 className="text-3xl font-bold">
                    Willkommen bei SemiFlow 🍓✨
                </h1>
                <p className="mt-4">Hier entsteht eure Seminarverwaltung.</p>
            </main>
        </>
    );
}

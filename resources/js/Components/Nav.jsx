export default function Nav() {
    return (
        <div className="navbar bg-base-100 shadow-sm">
            <div className="navbar-start">
                <a href="/dashboard" className="btn btn-ghost text-xl">
                    SemiFlow 🍓
                </a>
            </div>

            <div className="navbar-center hidden lg:flex">
                <ul className="menu menu-horizontal px-1">
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/seminare">Seminare</a></li>
                </ul>
            </div>

            <div className="navbar-end">
                <form action="/logout" method="POST">
                    <input type="hidden" name="_token" value={document.querySelector('meta[name="csrf-token"]')?.content} />
                    <input type="hidden" name="_method" value="DELETE" />
                    <button className="btn">Logout</button>
                </form>
            </div>
        </div>
    );
}

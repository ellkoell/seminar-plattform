import logo from '../Pictures/logo.png'; // Passt den Pfad relativ zu eurer Nav.jsx an

import { router } from '@inertiajs/react';

export default function Nav() {

    const handleLogout = (e) => {
        e.preventDefault();

        //  senden den DELETE-Request und zwingen den Browser danach zu einem harten Reload auf /login
        router.delete('/logout', {
            onSuccess: () => {
                window.location.href = '/login';
            }
        });
    };

    return (

        // Der Button ruft einfach weiterhin onClick={handleLogout} auf.
        <div className="navbar bg-base-100 shadow-sm">
            <div className="navbar-start">
                <a href="/dashboard" className="btn btn-ghost px-2 min-h-[64px] h-auto">
                    <img
                        src={logo}
                        alt="Logo"
                        className="h-30 w-30 rounded-full object-cover"
                    />
                </a>
            </div>

            <div className="navbar-center hidden lg:flex">
                <ul className="menu menu-horizontal px-1">
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/seminare">Seminare</a></li>
                </ul>
            </div>

            <div className="navbar-end">
                {/* 3. Das Formular fliegt raus, stattdessen nutzt man das onClick Event */}
                <button onClick={handleLogout} className="btn btn-error btn-outline">
                    Logout
                </button>
            </div>
        </div>
    );
}

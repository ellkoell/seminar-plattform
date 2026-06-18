import React from 'react';

export default function Home({ title }) {
    return (
        <div style={{ padding: '40px', fontFamily: 'sans-serif', textAlign: 'center' }}>
            <h1>{title}</h1>
            <p>Hier entsteht eure datenbankbasierte Web-App für die Seminarverwaltung.</p>
            <hr style={{ margin: '20px auto', width: '50%' }} />
            <div style={{ marginTop: '20px' }}>
                <a href="/login" style={{ padding: '10px 20px', background: '#4F46E5', color: 'white', borderRadius: '5px', textDecoration: 'none' }}>
                    Zum Login
                </a>
            </div>
        </div>
    );
}

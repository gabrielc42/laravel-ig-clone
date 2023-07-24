import React from 'react';
import ReactDOM from 'react-dom/client';

function FollowButton() {
    return (
        <template>
            <div>
                <button class="btn btn-primary m-4">Follow</button>
            </div>
        </template>
    );
}

export default FollowButton;

if (document.getElementById('follow-button')) {
    const Index = ReactDOM.createRoot(document.getElementById("follow-button"));

    Index.render(
        <React.StrictMode>
            <FollowButton/>
        </React.StrictMode>
    )
}
import React from "react";
import { FacebookProvider, Like } from 'react-facebook';

const FacebookMsg = () => {
    return (
        <FacebookProvider appId="123456789" chatSupport>
            <CustomChat pageId="123456789" minimized={false} />
        </FacebookProvider>
    );


};

export default FacebookMsg;
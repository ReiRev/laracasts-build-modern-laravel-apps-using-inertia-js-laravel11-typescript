import type { PageProps as BasePageProps } from '@inertiajs/core'

export interface PageProps extends BasePageProps {
  auth: AuthData
}

interface AuthData {
  user: AuthUserData
}

interface AuthUserData {
  username: string
}

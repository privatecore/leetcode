class Solution(object):
    def minEatingSpeed(self, piles, h):
        """
        :type piles: List[int]
        :type h: int
        :rtype: int
        """
        left = right = 0
        for p in piles:
            left += p
            right = max(right, p)

        left = -(-left // h) # left = ceil(sum(piles) / h)
                             # right = max(piles)
        while left < right:
            # binary search leftmost algo -> we need minimum integer k
            m = (left + right) >> 1
            time = 0
            for p in piles:
                time += -(-p // m) # ceil(p / m)
                # small optimization to break after we already pass h,
                # simce time should be less or equal h
                if time > h: break

            if time > h: left = m + 1
            else: right = m

        return left
